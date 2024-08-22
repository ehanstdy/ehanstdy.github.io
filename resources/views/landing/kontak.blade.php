@extends('landing.layouts.app')

@section('title')
<title>SNOWFLAKES - Kontak</title>
@endsection

@section('content')
<div class="wrapper pt-4">
   <br>
   <div class="container mb-5">
      <div class="row justify-content-center">
         <div class="col-lg-7">
            <div class="card bg-dark shadow-lg cards" style="background-color: #15202c!important">
               <div class="card-header">
                  <h3 class="card-title text-center">Hubungi Snowflakes</h3>
               </div>
               <div class="mt-2">
                  <table class="m-4">
                      <tr>
                          <td><i class="fa fa-whatsapp"></i> WhatsApp</td>
                          <td valign="top">: </td>
                          <td style="padding-left:5px"><a href="#" target="_blank"
                                  class="text-white">123456789</a></td>
                      </tr>
                      <tr>
                          <td><i class="fa fa-instagram"></i> Instagram</td>
                          <td valign="top">: </td>
                          <td style="padding-left:5px"><a href="#" class="text-white"
                                  target="_blank">snowflakesstore</a></td>
                      </tr>
                      <tr>
                          <td><i class="fa fa-envelope-o"></i> E-mail</td>
                          <td valign="top">: </td>
                          <td style="padding-left:5px"><a href="#" class="text-white"><span
                                      class="__cf_email__"
                                      data-cfemail="e0939590908f9294a088819995948f909590ce838f8d">snowflakes@gmail.com</span></a>
                          </td>
                      </tr>
                  </table>
              </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection