@extends('layouts.app')

@section('content')
<section class="hero is-primary">
  <div class="hero-head">

  </div>
  <section class="hero is-info">
    <div class="hero-body">
        <div class="container">
        <h1 class="title">Cloud Fridge</h1>
        <h2 class="subtitle">The easiest way to manage your fridge.</h2>
        </div>
    </div>
  </section>


  {{-- About us section--}}
  <div class="block">
    <article class="message">
        <div class="message-header">
            <p>About the App</p>
        </div>
        <div class="message-body">
            <p>This application aims to make keeping track of what is in your fridge easy.
               Just upload a picture of your receipt and you are ready to go!
            </p>
        </div>
        <div class="message-header">
            <p>About Us</p>
        </div>
        <div class="message-body">
            <p>Team Leader and Github Master - George Butler</p>
            <p>Scrum Master - Sydni Starling</p>
            <p>Back-End Lead - James Day</p>
            <p>Front-End Developer - Raymond Gee</p>
            <p>Front-End Lead - Aung Hein</p>
            <p>Developer - Jian Xin Qi</p>
            <p>Back-End Developer - Tommy Nguyen</p>
        </div>
    </article>
  </div>

  {{-- About us section TEST--}}
  {{-- 
  <div class="block">
    <article class="message">
        <div class="message-header">
            <p>About Us</p>
        </div>
        <div class="message-body">
            <table class="table is-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Team Leader & Github Master</td>
                        <td>George Butler</td>
                    </tr>
                    <tr>
                        <td>Scrum Master</td>
                        <td>Sydni Starling</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
  </div>
--}}

</section>
@endsection