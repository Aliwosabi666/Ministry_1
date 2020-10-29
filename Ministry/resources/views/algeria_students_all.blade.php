@include('layouts.header')

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية</a>
                        </li>
                        <li class="active-bre"><a href="#">طلاب الجزائر</a>
                        </li>
                        <li class="page-back"><a href="index.html"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> print</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Student Details</h4>
                                    <p>All about students like name, student id, phone, email, country, city and more</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>                        
                                                    <th>الرقم</th>
                                                    <th>الصورة</th>
                                                    <th>الأسم</th>
                                                    <th>عام الأيفاد</th>
                                                    <th>الدرجة العلمية</th>
                                                    <th>التخصص</th>
                                                    <th>المنحة الربعية</th>
                                                    <th>الملاحظات</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
													<th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                    <td><a href="#"><span class="list-enq-name">1</span><span class="list-enq-city"></span></a>
                                                    </td>
                                                    <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                                    </td>
                                                    <td>Mohammed</td>
                                                    <td>+01 8574 6854</td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST32168</td>
													<td>21 Jun 1992</td>
                                                    <td>
                                                        <span class="label label-success">Edit</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-success">Delete</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('layouts.footer')