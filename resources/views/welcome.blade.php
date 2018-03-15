@extends('vista')

@section('contenido')
            
            <div class="links">
                <<?php foreach ($personas as $personas): ?>
                <ul>
                    <<?php foreach ($personas as $indice => $valor): ?>
                    <li>
                        {{$indice}}
                        - {{$valor}}
                    </li>
                    <<?php endforeach ?>
                </ul>
                <br><br

                <<?php endforeach ?>
            </div>


@stop