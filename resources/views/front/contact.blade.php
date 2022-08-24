

@extends('front/template')
@section('content')

    <div id="wrapper-content"><!-- PAGE WRAPPER-->
        <div id="page-wrapper"><!-- MAIN CONTENT-->
            <div class="main-content"><!-- CONTENT-->
                <div class="content">
                    <div class="section background-opacity page-title set-height-top">
                        <div class="container">
                            <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Əlaqə</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Ana səhifə</a></li>
                                    <li class="active"><a href="#">Əlaqə</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="section nav-subscribe">
                        <div class="container">
                            <div class="nav-subscribe-wrapper">
                                <div class="nav-subscribe-left"><p class="subscribe-text">Bizimlə <b class="focus">sosial şəbəkədə</b> tanış ol</p></div>
                                <div class="nav-subscribe-right">
                                    <a class="btn btn-green btn-bold" href="https://www.facebook.com/SPLab-101736738973027/" target="_blank"><span>Dəstək ol</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section section-padding contact-main">
                        <div class="container">
                            <div class="contact-main-wrapper">
                                <div class="row contact-method">
                                    <div class="col-md-4">
                                        <div class="method-item"><i class="fa fa-map-marker"></i>

                                            <p class="sub">Ünvan</p>

                                            <div class="detail"><p>{{$contact->full_adress}}</p></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="method-item"><i class="fa fa-phone"></i>

                                            <p class="sub">Əlaqə nömrəsi</p>

                                            <div class="detail"><p>Şəhər: +{{$contact->home_phone}}</p>

                                                <p>Mobil: +{{$contact->mobile_phone}}</p></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="method-item"><i class="fa fa-envelope"></i>

                                            <p class="sub">E-poçt</p>

                                            <div class="detail"><p>{{$contact->email}} </p>

                                                <p>www.splab.az</p></div>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{route('front.contact.post')}}" method="POST" class="bg-w-form contact-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label form-label">Ad və Soyad <span class="highlight">*</span></label><input type="text" name="name_sname" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="") Warning for the above !--></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label form-label">E-Poçt <span class="highlight">*</span></label><input type="text" name="email" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="")--></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label form-label">Müraciət səbəbi</label><select class="form-control form-input selectbox" name="reason_apply">
                                                    <option value="Zəhmət olmasa siyahıdan seçin">Zəhmət olmasa siyahıdan seçin</option>
                                                    <option value="Əməkdaşlıq">Əməkdaşlıq</option>
                                                    <option value="Təklif">Təklif</option>
                                                    <option value="Şikayət">Şikayət</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="control-label form-label">Mövzu</label><input type="text" name="subject" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="", hidden)--></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="contact-question form-group"><label class="control-label form-label">Müraciəti daxil edin <span class="highlight">*</span></label><textarea name="apply" class="form-control form-input"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="contact-submit">
                                        <button type="submit" class="btn btn-contact btn-green"><span>Müraciəti göndər</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="section background-opacity" style="padding: 100px 20px;background-image: url(assets/images/teams_background.jpg);background-repeat: no-repeat;background-attachment: fixed;background-position: center center;color: #fff;background-size: cover;">
                        <div class="row">
                            <div class="col-md-6 col-12 ">
                                <h3 style="color: #fff; margin: 5px; text-align: center;">Beyləqan</h3>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3066.688223385381!2d47.61348431537635!3d39.76910797944569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf897ae0f8d6092f4!2zMznCsDQ2JzA4LjgiTiA0N8KwMzYnNTYuNCJF!5e0!3m2!1sru!2s!4v1636896218228!5m2!1sru!2s" style="width: 100%; height: 400px;" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            </div>
                            <div class="col-md-6 col-12">
                                <h3 style="color: #fff; margin: 5px; text-align: center;">Bakı</h3>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6075.046758547109!2d49.875841505608996!3d40.4194082895849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4030881d63edbdad%3A0xc67e82c925f5d676!2s1222%20Alaskar%20Gayibov%20St%2C%20Baku!5e0!3m2!1sen!2s!4v1636896258328!5m2!1sen!2s" style="width: 100%; height: 400px;" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- BUTTON BACK TO TOP-->
        <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
    </div>

@endsection

@section('css')

@endsection
@section('js')

@endsection
