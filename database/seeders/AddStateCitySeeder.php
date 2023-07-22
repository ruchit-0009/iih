<?php

namespace Database\Seeders;

use App\Models\CityModel;
use App\Models\StateModel;
use Illuminate\Database\Seeder;

class AddStateCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cities = array(
            array('city_id' => '2', 'city_name' => 'Port Blair', 'city_state' => 'Andaman & Nicobar Islands'),

            array('city_id' => '3', 'city_name' => 'Adilabad', 'city_state' => 'Andhra Pradesh'),
            array('city_id' => '4', 'city_name' => 'Adoni', 'city_state' => 'Andhra Pradesh'),
            array('city_id' => '85', 'city_name' => 'Palasa Kasibugga', 'city_state' => 'Andhra Pradesh'),
            array('city_id' => '86', 'city_name' => 'Palwancha', 'city_state' => 'Andhra Pradesh'),

            array('city_id' => '142', 'city_name' => 'Abhayapuri', 'city_state' => 'Assam'),
            array('city_id' => '143', 'city_name' => 'Amguri', 'city_state' => 'Assam'),
            array('city_id' => '144', 'city_name' => 'Anandnagaar', 'city_state' => 'Assam'),
            array('city_id' => '145', 'city_name' => 'Barpeta', 'city_state' => 'Assam'),

            array('city_id' => '280', 'city_name' => 'Sugauli', 'city_state' => 'Bihar'),
            array('city_id' => '281', 'city_name' => 'Sultanganj', 'city_state' => 'Bihar'),
            array('city_id' => '282', 'city_name' => 'Supaul', 'city_state' => 'Bihar'),
            array('city_id' => '283', 'city_name' => 'Warisaliganj', 'city_state' => 'Bihar'),

            array('city_id' => '284', 'city_name' => 'Ahiwara', 'city_state' => 'Chhattisgarh'),
            array('city_id' => '285', 'city_name' => 'Akaltara', 'city_state' => 'Chhattisgarh'),
            array('city_id' => '286', 'city_name' => 'Ambagarh Chowki', 'city_state' => 'Chhattisgarh'),
            array('city_id' => '287', 'city_name' => 'Ambikapur', 'city_state' => 'Chhattisgarh'),

            array('city_id' => '320', 'city_name' => 'Amli', 'city_state' => 'Dadra & Nagar Haveli'),
            array('city_id' => '321', 'city_name' => 'Silvassa', 'city_state' => 'Dadra & Nagar Haveli'),

            array('city_id' => '322', 'city_name' => 'Daman and Diu', 'city_state' => 'Daman & Diu'),
            array('city_id' => '323', 'city_name' => 'Daman and Diu', 'city_state' => 'Daman & Diu'),

            array('city_id' => '324', 'city_name' => 'Asola', 'city_state' => 'Delhi'),
            array('city_id' => '325', 'city_name' => 'Delhi', 'city_state' => 'Delhi'),

            array('city_id' => '326', 'city_name' => 'Aldona', 'city_state' => 'Goa'),
            array('city_id' => '327', 'city_name' => 'Curchorem Cacora', 'city_state' => 'Goa'),
            array('city_id' => '328', 'city_name' => 'Madgaon', 'city_state' => 'Goa'),

            array('city_id' => '333', 'city_name' => 'Ahmedabad', 'city_state' => 'Gujarat'),

            array('city_id' => '345', 'city_name' => 'Gandhinagar', 'city_state' => 'Gujarat'),

            array('city_id' => '350', 'city_name' => 'Junagadh', 'city_state' => 'Gujarat'),


            array('city_id' => '368', 'city_name' => 'Manavadar', 'city_state' => 'Gujarat'),

            array('city_id' => '385', 'city_name' => 'Rajkot', 'city_state' => 'Gujarat'),

            array('city_id' => '474', 'city_name' => 'Sirsa', 'city_state' => 'Haryana'),
            array('city_id' => '475', 'city_name' => 'Sohna', 'city_state' => 'Haryana'),
            array('city_id' => '476', 'city_name' => 'Sonipat', 'city_state' => 'Haryana'),

            array('city_id' => '481', 'city_name' => 'Arki', 'city_state' => 'Himachal Pradesh'),
            array('city_id' => '482', 'city_name' => 'Baddi', 'city_state' => 'Himachal Pradesh'),

            array('city_id' => '493', 'city_name' => 'Jammu', 'city_state' => 'Jammu & Kashmir'),
            array('city_id' => '502', 'city_name' => 'Leh', 'city_state' => 'Jammu & Kashmir'),
            array('city_id' => '503', 'city_name' => 'Punch', 'city_state' => 'Jammu & Kashmir'),
            array('city_id' => '504', 'city_name' => 'Rajauri', 'city_state' => 'Jammu & Kashmir'),

            array('city_id' => '508', 'city_name' => 'Amlabad', 'city_state' => 'Jharkhand'),
            array('city_id' => '509', 'city_name' => 'Ara', 'city_state' => 'Jharkhand'),
            array('city_id' => '510', 'city_name' => 'Barughutu', 'city_state' => 'Jharkhand'),
            array('city_id' => '547', 'city_name' => 'Tenu Dam-cum- Kathhara', 'city_state' => 'Jharkhand'),

            array('city_id' => '548', 'city_name' => 'Arasikere', 'city_state' => 'Karnataka'),
            array('city_id' => '549', 'city_name' => 'Bangalore', 'city_state' => 'Karnataka'),
            array('city_id' => '563', 'city_name' => 'Kolar', 'city_state' => 'Karnataka'),
            array('city_id' => '564', 'city_name' => 'Kota', 'city_state' => 'Karnataka'),
            array('city_id' => '685', 'city_name' => 'Thiruvananthapuram', 'city_state' => 'Kerala'),
            array('city_id' => '686', 'city_name' => 'Thodupuzha', 'city_state' => 'Kerala'),
            array('city_id' => '687', 'city_name' => 'Thrissur', 'city_state' => 'Kerala'),
            array('city_id' => '688', 'city_name' => 'Tirur', 'city_state' => 'Kerala'),
            array('city_id' => '692', 'city_name' => 'Kavaratti', 'city_state' => 'Lakshadweep'),
            array('city_id' => '693', 'city_name' => 'Ashok Nagar', 'city_state' => 'Madhya Pradesh'),
            array('city_id' => '694', 'city_name' => 'Balaghat', 'city_state' => 'Madhya Pradesh'),
            array('city_id' => '695', 'city_name' => 'Betul', 'city_state' => 'Madhya Pradesh'),
            array('city_id' => '696', 'city_name' => 'Bhopal', 'city_state' => 'Madhya Pradesh'),

            array('city_id' => '800', 'city_name' => 'Lonavla', 'city_state' => 'Maharashtra'),
            array('city_id' => '817', 'city_name' => 'Mumbai', 'city_state' => 'Maharashtra'),
            array('city_id' => '819', 'city_name' => 'Nagpur', 'city_state' => 'Maharashtra'),
            array('city_id' => '849', 'city_name' => 'Pune', 'city_state' => 'Maharashtra'),

            array('city_id' => '907', 'city_name' => 'Imphal', 'city_state' => 'Manipur'),
            array('city_id' => '908', 'city_name' => 'Kakching', 'city_state' => 'Manipur'),
            array('city_id' => '909', 'city_name' => 'Lilong', 'city_state' => 'Manipur'),
            array('city_id' => '910', 'city_name' => 'Mayang Imphal', 'city_state' => 'Manipur'),
            array('city_id' => '911', 'city_name' => 'Thoubal', 'city_state' => 'Manipur'),

            array('city_id' => '912', 'city_name' => 'Jowai', 'city_state' => 'Meghalaya'),
            array('city_id' => '913', 'city_name' => 'Nongstoin', 'city_state' => 'Meghalaya'),
            array('city_id' => '914', 'city_name' => 'Shillong', 'city_state' => 'Meghalaya'),
            array('city_id' => '915', 'city_name' => 'Tura', 'city_state' => 'Meghalaya'),

            array('city_id' => '916', 'city_name' => 'Aizawl', 'city_state' => 'Mizoram'),
            array('city_id' => '917', 'city_name' => 'Champhai', 'city_state' => 'Mizoram'),
            array('city_id' => '918', 'city_name' => 'Lunglei', 'city_state' => 'Mizoram'),
            array('city_id' => '919', 'city_name' => 'Saiha', 'city_state' => 'Mizoram'),

            array('city_id' => '920', 'city_name' => 'Dimapur', 'city_state' => 'Nagaland'),
            array('city_id' => '921', 'city_name' => 'Kohima', 'city_state' => 'Nagaland'),
            array('city_id' => '922', 'city_name' => 'Mokokchung', 'city_state' => 'Nagaland'),
            array('city_id' => '923', 'city_name' => 'Tuensang', 'city_state' => 'Nagaland'),
            array('city_id' => '924', 'city_name' => 'Wokha', 'city_state' => 'Nagaland'),
            array('city_id' => '925', 'city_name' => 'Zunheboto', 'city_state' => 'Nagaland'),
            array('city_id' => '991', 'city_name' => 'Paradip', 'city_state' => 'Orissa'),
            array('city_id' => '992', 'city_name' => 'Parlakhemundi', 'city_state' => 'Orissa'),
            array('city_id' => '993', 'city_name' => 'Pattamundai', 'city_state' => 'Orissa'),

            array('city_id' => '1007', 'city_name' => 'Karaikal', 'city_state' => 'Pondicherry'),
            array('city_id' => '1008', 'city_name' => 'Mahe', 'city_state' => 'Pondicherry'),

            array('city_id' => '1011', 'city_name' => 'Ahmedgarh', 'city_state' => 'Punjab'),
            array('city_id' => '1012', 'city_name' => 'Amritsar', 'city_state' => 'Punjab'),
            array('city_id' => '1056', 'city_name' => 'Nangal', 'city_state' => 'Punjab'),
            array('city_id' => '1078', 'city_name' => 'Zirakpur', 'city_state' => 'Punjab'),
            array('city_id' => '1162', 'city_name' => 'Udaipur', 'city_state' => 'Rajasthan'),
            array('city_id' => '1163', 'city_name' => 'Udaipurwati', 'city_state' => 'Rajasthan'),
            array('city_id' => '1164', 'city_name' => 'Vijainagar', 'city_state' => 'Rajasthan'),
            array('city_id' => '1165', 'city_name' => 'Gangtok', 'city_state' => 'Sikkim'),
            array('city_id' => '1166', 'city_name' => 'Calcutta', 'city_state' => 'West Bengal'),
            array('city_id' => '1290', 'city_name' => 'Virudhachalam', 'city_state' => 'Tamil Nadu'),
            array('city_id' => '1291', 'city_name' => 'Virudhunagar', 'city_state' => 'Tamil Nadu'),
            array('city_id' => '1292', 'city_name' => 'Viswanatham', 'city_state' => 'Tamil Nadu'),
            array('city_id' => '1298', 'city_name' => 'Kailasahar', 'city_state' => 'Tripura'),
            array('city_id' => '1299', 'city_name' => 'Khowai', 'city_state' => 'Tripura'),
            array('city_id' => '1300', 'city_name' => 'Pratapgarh', 'city_state' => 'Tripura'),
            array('city_id' => '1301', 'city_name' => 'Udaipur', 'city_state' => 'Tripura'),
            array('city_id' => '1423', 'city_name' => 'Unnao', 'city_state' => 'Uttar Pradesh'),
            array('city_id' => '1424', 'city_name' => 'Utraula', 'city_state' => 'Uttar Pradesh'),
            array('city_id' => '1425', 'city_name' => 'Varanasi', 'city_state' => 'Uttar Pradesh'),
            array('city_id' => '1430', 'city_name' => 'Almora', 'city_state' => 'Uttarakhand'),
            array('city_id' => '1431', 'city_name' => 'Bazpur', 'city_state' => 'Uttarakhand'),
            array('city_id' => '1450', 'city_name' => 'Sitarganj', 'city_state' => 'Uttarakhand'),
            array('city_id' => '1453', 'city_name' => 'Adra', 'city_state' => 'West Bengal'),
            array('city_id' => '1501', 'city_name' => 'Tarakeswar', 'city_state' => 'West Bengal'),
            array('city_id' => '1502', 'city_name' => 'Chikmagalur', 'city_state' => 'Karnataka'),
            array('city_id' => '1503', 'city_name' => 'Davanagere', 'city_state' => 'Karnataka'),
            array('city_id' => '1506', 'city_name' => 'Chennai', 'city_state' => 'Tamil Nadu'),
            array('city_id' => '1507', 'city_name' => 'Coimbatore', 'city_state' => 'Tamil Nadu'),
        );

        foreach ($cities as $city_row) {
            $city     = $city_row['city_name'];
            $state    = $city_row['city_state'];
            $stateobj = StateModel::where('name', $state)->first();
            if (empty($stateobj)) {
                $stateobj = StateModel::create(['name' => $state]);
            }
            $cityObj = CityModel::where('name', $city)->where('state_id', $stateobj->id)->first();
            if (empty($cityObj)) {
                CityModel::create(['name' => $city, 'state_id' => $stateobj->id]);
            }
        }
    }
}
