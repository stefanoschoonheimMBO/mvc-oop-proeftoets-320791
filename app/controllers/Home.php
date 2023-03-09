<?php

class Home extends BaseController
{
    public function index($id = NULL, $naam = NULL, $club = NULL, $leeftijd = NULL, $nationaliteit = NULL, $salaris = NULL)
    {

        $data = [
            'title' => 'Welkom op de homepage',
            'Id'    => $id,
            'Naam'  => $naam,
            'Club' => $club,
            'Leeftijd' => $leeftijd,
            'Nationaliteit' => $nationaliteit,
            'Salaris' => $salaris
        ];

        $this->view('home/index', $data);
    }
}