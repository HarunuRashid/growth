<?php

namespace App\Controllers;

use App\Core\App;

use League\Csv\Reader;
use League\Csv\Statement;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
// use Twig\Environment;
// use Twig\Loader\FilesystemLoader;

class CustomersController
{
    
    private $csv;
    private $smtp;
    private $loader;
    private $twig;
    private $header;
    private $records;

    public function __construct()
    {
        // $this->csv = Reader::createFromPath($filename, $permission);
       

        // $this->loader = new FilesystemLoader(__DIR__ . '../views/templates');
        // $this->twig = new Environment($this->loader);

    }

    public function index()
    {
        $users = App::get('database')->selectAll('customers');

        return view('customers', [
            'users' => $users
        ]);
    }

    public function recordSettings($offset, $limit)
    {
        return (new Statement())->offset($offset)->limit($limit);
    }

    public function show()
    {
        echo 'Show single topic';
    }

    public function uploadData()
    {
        return view('form');
    }

    public function saveFile()
    {

    }
    public function getCsv()
    {
        
        // die(var_dump($this->header));

        // die();
        // $data = $this->records;
        // $data = $this->csv->getRecords();
        // // $users = App::get('database')->selectAll('users');
        // return view('customers', [
        //     'users' => $data
        // ]);
        // return new Response($this->csv);
        // return $this->twig->render('index.php.twig', ['number' => 20]);
        // return new Response($this->twig->render('csv.html.twig', ['data' => $data]));
    }

    public function store()
    {

        if (isset($_POST["import"])) {
    
            $fileName = $_FILES["file"]["tmp_name"];
            
            if ($_FILES["file"]["size"] > 0) {
                
                $file = fopen($fileName, "r");
                
                // var_dump($_FILES);
                // die();
                $this->csv = Reader::createFromPath($fileName, 'r');
                $this->csv->setHeaderOffset(0);
        
                $this->header = $this->csv->getHeader(); //returns the CSV header record
        
                $this->records = $this->csv->getRecords(); //returns all the CSV records as an Iterator object
                // $records = $this->csv->getRecords();
                // Insert the user associated with the request

                foreach ($this->records as $record) {

                    //do something here
                    App::get('database')->insert('customers', 
                    [
                        'KDNR' => $record['KDNR'],
                        'Firma' => $record['Firma'],
                        'Vorname' => $record['Vorname'],
                        'Nachname' => $record['Nachname'],
                        'CareOf' => $record['CareOf'],
                        'Strasse' => $record['Strasse'],
                        'Hausnummer' => $record['Hausnummer'],
                        'Postfach' => $record['Postfach'],
                        'PLZ' => $record['PLZ'],
                        'Ort' => $record['Ort'],
                    ]);

                }
               
            }
        }

        return redirect('customers');
    }
    public function deleteAll()
    {
        App::get('database')->delete();
        return redirect('customers');
    }
    
}