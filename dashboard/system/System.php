<?php

/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 9/24/2019
 * Time: 12:07 PM
 */
include_once dirname(__FILE__) . '/Database.php';
require_once dirname(__FILE__). '/vendor/autoload.php';
class System
{

    protected $pdo;
    protected $con;
    protected $token;
    protected $email;
    protected $name;
    protected $lastName;
    protected $dob;
    protected $mobile;
    protected $address;
    protected $pin;
    protected $town;
    protected $gender;
    protected $package;
    protected $nationID;
    protected $id;
    protected $units;
    protected $category;
    protected $price;
    protected $desc;
    protected $serial;
    protected $password;
    protected $confirmPassword;
    protected $permission;
    protected $dept;
    protected $tags;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param mixed $package
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }

    /**
     * @return mixed
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSerial()
    {
        return $this->serial;
    }


    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * @param mixed $pin
     */
    public function setPin($pin)
    {
        $this->pin = $pin;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @param mixed $units
     */
    public function setUnits($units)
    {
        $this->units = $units;
    }
    /**
     * @param mixed $nationID
     */
    public function setNationID($nationID)
    {
        $this->nationID = $nationID;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @return mixed
     */
    public function getNationID()
    {
        return $this->nationID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $serial
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


    /**
     * @return mixed
     */
    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }

    /**
     * @param mixed $confirmPassword
     */
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;
    }

    /**
     * @return mixed
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * @param mixed $permission
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
    }

    /**
     * @param mixed $dept
     */
    public function setDept($dept)
    {
        $this->dept = $dept;
    }

    /**
     * @return mixed
     */
    public function getDept()
    {
        return $this->dept;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }


    public function __construct()
    {
        session_start();
        $db = new Database();
        $this->pdo = $db->PDO();
        $this->con = $db->mysqli();
    }

    public function domain(){
        if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
            $uri = 'https://';
        } else {
            $uri = 'http://';
        }

        $uri .= $_SERVER['HTTP_HOST'];
        return $uri;
    }

    public function apiURL(){
        return "http://localhost:9090";
    }

    public function checkLoginState(){

        if(!isset($_SESSION)){

            session_start();
        }
        if(isset($_SESSION['serial'])){

            $serial = $_SESSION['serial'];

            $query = "SELECT * FROM `lgt_sess` WHERE  `sess_srl` = :serial;";

            $stmt = $this->pdo->prepare($query);
            $stmt->execute(array(':serial' =>$serial));

            $row = $stmt-> fetch(PDO::FETCH_ASSOC);

            if($row['id'] > 0){
                return true;
            }else{
                $this->deleteCookie();
                return false;
            }

        }else{
            return false;
        }

    }

    public  function createRecord($admin_name, $token){
        $serial = $this->createString(30);

        $this->createSession($admin_name,  $serial);

        $this->pdo->prepare('DELETE FROM lgt_sess WHERE sess_us_id = :sessions_userid;') ->execute(array(':sessions_userid' =>$admin_name));

        $query ="INSERT INTO `lgt_sess`(`id`,`sess_us_id`, `sess_tkn`, `sess_srl`, `sess_dt`) VALUES ('',:admin_id,:token,:serial,now())";
        $stmt = $this->pdo->prepare($query);

        if($stmt->execute(array(':admin_id' =>$admin_name, ':token' => $token, ':serial' => $serial))){

            return true;

        }else{
            return false;
        }

    }

    public function createSession($admin_name, $serial){
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['username'] = $admin_name;
        $_SESSION['serial'] = $serial;

    }

    public function createCookie($admin_name, $serial){
        setcookie('username', $admin_name, time() + (86400) * 30, "/");
        setcookie('serial', $serial, time() + (86400) * 30, "/");
    }

    public function deleteCookie(){
        session_unset();
        setcookie('username', '', time() -1, "/");
        setcookie('serial', '', time() -1, "/");
    }

    public function createString($len){
        $string = "1qay2wsx3edc4rfv5tgb6zhn7ujm8ik9ollpAQWSXEDCVFRTGBNHYZUJMKILOP";

        return substr(str_shuffle($string), 0, $len);
    }

    public function login(){

        $request = json_encode(array('email' => $this->getEmail(), 'password' => $this->getPassword()));
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->apiURL()."/api/admin/login",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $request,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        if ($err) {
            echo "<script>
                   /* $.bootstrapGrowl('Login error: ".$err."', {
                        type: 'danger',
                        align: 'center',
                        width: 'auto',
                        allow_dismiss: false
                    });*/
                    alert('".$err."');
                  </script>";
            echo "<script> window.open('".$this->domain()."/', '_self') </script>";
        } else {
            if($data['success'] == true){
                $tkn = $data['token'];
                if($this->createRecord($this->getEmail(), $tkn)){
                    header('location:'.$this->domain()."/dashboard/");
                    exit();
                }else{
                    echo "<script>
                            alert('Login error: Session could not be initialised');
                        </script>";
                    $this->deleteCookie();
                    echo "<script> window.open('".$this->domain()."', '_self') </script>";

                }

            }else{
                echo "<script>
                              alert('".$data['error']['type']." : ".$data['error']['message']."');
                              window.open('".$this->domain()."/', '_self');
                      </script>";
            }
        }
        curl_close($curl);

    }

    public function register(){
        $request = json_encode(array('email' => $this->getEmail(), 'password' => $this->getPassword(), 'confirmPassword' => $this->getConfirmPassword(), 'permission' => 2, 'dept' => 1));
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->apiURL()."/api/admin/create",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $request,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);

        if ($err) {

            echo "<script>alert('Account creation error : ".$err."')</script>";
            echo "<script>window.open('".$this->domain()."/base/register.php?success=false?message=connection to backend failed', '_self')</script>";

        } else {
            if($data['success'] == true){

                echo "<script>alert('".$data['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/admin?success=true?message=account created', '_self')</script>";

            }else{

                echo "<script>alert('".$data['error']['type']." : ".$data['error']['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/admin?success=false?message=account creation failed', '_self')</script>";

            }
        }
        curl_close($curl);

    }

    public function createCategory(){
        $request = json_encode(array(
            'name' => $this->getName(),
            'desc' => $this->getDesc()
        ));

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->apiURL()."admin/products/add/category",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $request,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        print_r($data);
        /*if ($err) {

            echo "<script>alert('Category creation error : ".$err."')</script>";
            echo "<script>window.open('".$this->domain()."/products/categories.php', '_self')</script>";

        } else {
            if($data['success'] == true){

                echo "<script>alert('Success: ".$data['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/products/categories.php', '_self')</script>";

            }else{

               echo "<script>alert('Failure: ".$data['error']['message']."')</script>";
               echo "<script>window.open('".$this->domain()."/products/categories.php', '_self')</script>";

            }
        }*/
    }
}