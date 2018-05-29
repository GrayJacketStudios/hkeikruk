@extends('layouts.template')


@section('contenido')

<div class="container">
    <h1 class="titulos">Tarifas 2018 a 2019 en Hostal Keikruk</h1>
    <hr class="brace"/>
    <p>Disponemos de las siguientes tarifas mediante reservación directa, si tiene cualquier duda o consulta, o requiere información sobre un convenio, contactese con nosotros.</p>

<br>
    <h3>Temporada Baja</h3><span><strong>* La temporada baja es a partir del 30 de Abril hasta el 30 de Septiembre</strong></span>
    <table style="text-align: center;" class="table table-hover ">
        <tr class="table-active">
            <th scope="col"></th><th scope="col">Pesos Chilenos (CLP)</th><th scope="col">Dolares (USD)</th>
        </tr>
        <tr >
            <th scope="row" style="text-align: left;">Habitacion familiar en Suite</td>
            <td >$63.000</td>
            <td>$100</td>
        </tr>
        <tr >
            <th scope="row" style="text-align: left;">Habitacion Matrimonial o Twin en Suite</td>
            <td >$55.000</td>
            <td>$87</td>
        </tr>
        <tr >
            <th scope="row" style="text-align: left;">Habitacion matrimonial Junior</td>
            <td >$42.500</td>
            <td>$67</td>
        </tr>
        <tr >
            <th scope="row" style="text-align: left;">Habitacion Matrimonial o Twin Baño compartido</td>
            <td >$35.000</td>
            <td>$55</td>
        </tr>

    </table>


    <h3>Temporada Alta</h3><span><strong>La temporada Alta es a partir del 1 de Octubre hasta el 29 de Abril</strong></span>
    <table style="text-align: center;" class="table table-hover ">
        <tr class="table-active">
            <th scope="col"></th><th scope="col">Pesos Chilenos (CLP)</th><th scope="col">Dolares (USD)</th>
        </tr>
        <tr >
            <th scope="row" style="text-align: left;">Habitacion familiar en Suite</td>
            <td >$75.000</td>
            <td>$120</td>
        </tr>
        <tr >
            <th scope="row" style="text-align: left;">Habitacion Matrimonial o Twin en Suite</td>
            <td >$65.000</td>
            <td>$103</td>
        </tr>
        <tr >
            <th scope="row" style="text-align: left;">Habitacion matrimonial Junior</td>
            <td >$50.000</td>
            <td>$80</td>
        </tr>
        <tr >
            <th scope="row" style="text-align: left;">Habitacion Matrimonial o Twin Baño compartido</td>
            <td >$38.000</td>
            <td>$60</td>
        </tr>

    </table>

    <br>
    <strong>(*)Todos nuestros precios incluyen IVA</strong>

</div>

@include('layouts.elements.contacto')

@endsection

