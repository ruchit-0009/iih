<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CityModel;
use App\Models\HobbiesModel;
use App\Models\StateModel;
use App\Models\User;
use App\Models\UserHobbiesModel;
use App\Traits\ImageManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    use ImageManager;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['city','state','userHobbies'])->get();
        
        return response([ 'users' => $users, 'message' => 'Successful','success' => true], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile_number' => 'required|digits_between:10,15',
            'hobbies' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 200);
        }
        $image = $this->uploads($request->file('image'),'user/');
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile_number'=>$request->mobile_number,
            'gender'=>$request->gender,
            'state_id'=>$request->state,
            'city_id'=>$request->city,
            'profile_pic'=>$image['filePath'],
        ]);
        $userHobbies = [];
        foreach($request->hobbies as $hobby){
            $userHobbies[]=[
                'user_id' =>$user->id,
                'hobby_id' =>$hobby,
            ];
        }
        UserHobbiesModel::insert($userHobbies);
        return response([ 'message' => 'Add Successful','status' => true], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::where('id',$id)->first();
        $users['hobbies_id'] = $users->userHobbiesId->pluck('hobby_id');
        $users['gender_id'] = $users->getRawOriginal('gender');
        $state = StateModel::all();
        $hobbies = HobbiesModel::all();
        $city = CityModel::where('state_id',$users->state_id)->get();
        return response([ 'users' => $users,'state' => $state,'city'=>$city ,'hobbies' => $hobbies, 'message' => 'Successful','success' => true], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'mobile_number' => 'required|digits_between:10,15',
            'hobbies' => 'required',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 200);
        }
        $users =  User::find($id);
        $path = $users->getRawOriginal('profile_pic');
        if($request->hasFile('image')){
           $this->deleteImage($path);
           $image = $this->uploads($request->file('image'),'user/');
           $path = $image['filePath'];
        }
         User::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile_number'=>$request->mobile_number,
            'gender'=>$request->gender,
            'state_id'=>$request->state,
            'city_id'=>$request->city,
            'profile_pic'=>$path,
        ]);
        UserHobbiesModel::where('user_id',$id)->delete();
        $userHobbies = [];
        foreach($request->hobbies as $hobby){
            $userHobbies[]=[
                'user_id' =>$id,
                'hobby_id' =>$hobby,
            ];
        }
        UserHobbiesModel::insert($userHobbies);
        return response([ 'message' => 'Update Successful','status' => true], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users =  User::find($id);
        $path = $users->getRawOriginal('profile_pic');
        $this->deleteImage($path);
        $users->delete();
        return response([ 'message' => 'Delete Successful','status' => true], 200);
    }

    public function getStateAndHobbies(){
       $state = StateModel::all();
       $hobbies = HobbiesModel::all();
       $city = CityModel::where('state_id',1)->get();
       return response([ 'state' => $state,'city'=>$city ,'hobbies' => $hobbies,'message' => 'Successful','success' => true], 200);
    }
    public function getCity($stateId){
        $city = CityModel::where('state_id',$stateId)->get();
       return response([ 'city'=>$city ,'message' => 'Successful','success' => true], 200);
    }
}
