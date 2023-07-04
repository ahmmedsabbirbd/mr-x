@extends('layouts.app1')

@section('content')
    <div class="container">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Resume Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Resume Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#experience" data-toggle="tab">Experience</a></li>
                      <li class="nav-item"><a class="nav-link" href="#education" data-toggle="tab">Education</a></li>
                      <li class="nav-item"><a class="nav-link" href="#skills" data-toggle="tab">Professional Skills</a></li>
                      <li class="nav-item"><a class="nav-link" href="#languages" data-toggle="tab">Languages</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="experience">
                        @include('pages.admin.resume.experience.experience-list')
                      </div>
                      <div class="tab-pane" id="education">
                        @include('pages.admin.resume.education.education-list')
                      </div>
                      <div class="tab-pane" id="skills">
                        @include('pages.admin.resume.skills.skill-list')
                      </div>
                      <div class="tab-pane" id="languages">
                        @include('pages.admin.resume.language.language-list')
                      </div>
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
        </div>
    @endsection
