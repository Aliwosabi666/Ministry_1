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
                                    <form action="/backend/student_morocco_add" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" name="name" id="name" value="" class="validate" required>
                                                <label class=""> الاسم</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" name="year_of_dispatch" id="year_of_dispatch" value="" class="validate" required>
                                                <label class="">عام الإيفاد</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" name="Degree" id="Degree" value="" class="validate" required>
                                                <label class="">الدرجة العلمية</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" name="specialization" id="specialization" class="validate" value="" required>
                                                <label class="">التخصص</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="quarterly_grant" id="quarterly_grant" value="" class="validate">
                                                <label class="">المنحة الربعية</label>
                                            </div>

                                        </div>
     
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" name="observation" id="observation" value="" class="validate">
                                                <label>الملاحظات</label>
                                            </div>
                                        </div>
                                        <div class="row">
											<div class="file-field input-field col s12">
												<div class="btn admin-upload-btn">
													<span>File</span>
													<input type="file" name="coverImage" id="coverImage">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" name="coverImage" id="coverImage" type="text" placeholder="Profile image">
												</div>
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