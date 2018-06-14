@extends('layouts.master')

@section('title')
  Lilian
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('/css/cv.css') }}">
@endsection



@section('content')

  <div class="row full-view">

    <div class="col-3">
      <div class="table-class" style="width:100%;">
  <table>
    <thead>
      <th>Currulicum Vitae</th>
    </thead>
    <tbody>

        <tr>
            <td>
              <h3>cv ding</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </td>
            <td>
              <h3>cv ding</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </td>
            <td>
              <h3>cv ding</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </td>
        </tr>

    </tbody>
  </table>
  </div>
    </div>
    <div class="col-9 align-c" style="height: 90vh; top: 5%;">
      <p style="position: absolute;  padding: 4%; text-align: left; overflow: auto; max-height: 89vh;">
        <span style="text-decoration: underline; font-weight: bold;">CURRULICUM VITAE</span><br>
          Born 1997, the Netherlands.<br>
          Currently living and working in Groningen, the Netherlands.<br>
          <b> EDUCATION </b><br>
          2009 - 2014: HAVO, Winkler Prins Secondary School Veendam (2009 - 2012 VWO) <br>
          2014 - now: Fine Art, Academy Minerva, Groningen. <br>
          <b> EXHIBITIONS </b> <br>
          Coming up: small solo, ’Skek, Zeedijk Amsterdam <br>
          2018 <br>
          February 2018: ‘Its not me, it’s you’, ZUHAUSE, Groningen, NL <br>
          2017 <br>
          May 2017: 'Leftovers', Maydays, OOST/the Gym Groningen, NL <br>
          Februari 2017: 'January Expo', Academy Minerva Groningen, NL <br>
          2016 <br>
          October 2016: 'WP 150', Van Berensteyn, Veendam, NL <br>
          September 2016: the studios, Groninger Museum, Groningen, NL <br>
          April 2016: 'De Nieuwelingen', Galerie de Smederij, Sappemeer, NL <br>
          Februari 2016: 'Art 15/20', stichting WEP, Groningen, NL <br>
          2015 <br>
          June 2015: Kunstbende Finals, Westergasfabriek Amsterdam, NL <br>
          2013 <br>
          August 2013: Kunstbende Finals, Melkweg Amsterdam, NL <br>
          September 2013: Simplon, Groningen, NL <br>
          <b> AWARDS </b><br>
          2017 <br>
          Best Young Talent (Grootste Jong Talent) Noordelijk Filmfestival 2017 <br>
          2016 <br>
          1th place Kunstbende National (POETRY) <br>
          2th place Kunstbende National (FILM) <br>
          <b> PUBLICATIONS </b> <br>
          2018 <br>
          Van huilen krijg je honger, collection of poetry <br>
          scholieren.com interview with Elisa Lo An Joe <br>
          2016: Document 12, De Optimist, online literary magazine <br>
          2013: 'Vruchtvlees', collection of poetry <br>
          <b> PERFORMANCE (TEXTUAL) </b> <br>
          2017 <br>
          Poezië met, Theater de Kapel, Groningen, NL <br>
          De Poëziebus, Grote Markt, Groningen NL <br>
          2016 <br>
          Kunstbende Finals, Tivoli Utrecht, NL <br>
          Wintertuin Festival, Doornroosje Nijmegen, NL <br>
          Podium New Attraction, Spoken Word, Simplon Groningen, NL <br>
          Noise Soup & Knowledge, Gallery Sign, (Eurosonic) Groningen, NL <br>
          2015 <br>
          Kunstbende Finals, Westergasfabriek Amsterdam, NL <br>
          2014 <br>
          Kunstbende Finals, Melkweg Amsterdam, NL <br>
          2013 <br>
          Kunstbende Finals, Melkweg Amsterdam, NL <br>
          <b> EXPERIENCE (OTHER) </b><br>
          2018 <br>
          Reading: Why I refuse to perceive my rapist as a monster, Harmoniegebouw Universiteit Groningen, NL <br>
          Judge for Kunstbende pre-finals film/expo, Groningen, NL <br>
          Online sale of artwork <br>
          2017 <br>
          MovieZone Jury, IFFR Filmfestival, Rotterdam, NL <br>
          Jury Kunstbende National Finale (Poetry), Tivoli Utrecht, Jury Kunstbende Groningen, Simplon (Film), NL <br>
          Hostess and teacher/instructor, the studios, Groninger Museum, Groningen, NL <br>
          2016 <br>
          Young artist residence week , Villanova Festival + Kunstbende Belgium, Antwerp, BE <br>
          2015 <br>
          Young artist exchange, Villanova Festival + Kunstbende NL/BE, Antwerp, BE <br>
        </p>
      <img src="{{ asset('/img/about/bg.jpg') }}" style=" width: 100%; max-height: 100%; object-fit: contain;" alt="" >

    </div>

  </div>

@endsection

@section('js')

@endsection
