@include('layouts.header')

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية</a>
                        </li>
                        <li class="active-bre"><a href="#"> أضف طالبًا جديدًا</a>
                        </li>
                        <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>أضف معلومات الطالب الجديدة</h4>
                                    <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and more</p>
                                </div>
                                <div class="tab-inn">
                                    <form action="{{ '/student_morocco_all/' . $mrc_std->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" name="name" id="name" value="{{$mrc_std->name}}" class="validate" required>
                                                <label class=""> الاسم</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" name="year_of_dispatch" id="year_of_dispatch" value="{{$mrc_std->year_of_dispatch}}" class="validate" required>
                                                <label class="">عام الإيفاد</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" name="Degree" id="Degree" value="{{$mrc_std->Degree}}" class="validate" required>
                                                <label class="">الدرجة العلمية</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" name="specialization" id="specialization" class="validate" value="{{$mrc_std->specialization}}" required>
                                                <label class="">التخصص</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="quarterly_grant" id="quarterly_grant" value="{{$mrc_std->quarterly_grant}}" class="validate">
                                                <label class="">المنحة الربعية</label>
                                            </div>

                                        </div>
     
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="observation" id="observation" value="{{$mrc_std->observation}}" class="validate">
                                                <label>الملاحظات</label>
                                            </div>
                                        </div>                                      
                                          <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('layouts.footer')