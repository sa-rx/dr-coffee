@extends('layouts.app')
@section('title', ' لوحة التحكم ')

@section('content')
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>لوحة التحكم</h2>
        </div> 
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <div class="row ">
                            <div class="col-md-6">
                                <a href="{{route('menu.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-coffee fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " >الاصناف </p>
                                </div>
                            </div>
 
                            <div class="col-md-6">
                                <a href="{{route('categories.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-tablets fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " >الفئات </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('offers.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-tags fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " >العروض </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('products.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-store fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " >المتجر </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('events.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-calendar-check fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " >تنظيم الفعاليات </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('franchises.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-calendar-check fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " >الامتياز التجاري </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('courses.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-certificate fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " >الكورسات </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('certificates.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-certificate fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " >اصدار الشهادات </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('participations.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-certificate fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " >المتدربين </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('abouts.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-address-card fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " >بيانات المقهى </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('contacts.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " >الرسائل</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('opinions.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-lightbulb fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " >الاراء </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('users.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-users  fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " > ادارة المستخدمين </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('roles.index')}}" >
                                    <h1  class="text-center  text-secondary"><button  style=" color: #98a175;  border-color: #98a175; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-atom fa-2x"></i> </button>  </h1>
                                </a>
                                <div id="demo" >
                                    <p class="text-center"  style=" color: #98a175; " > ادارة ادوار المستخدمين </p>
                                </div>
                            </div>

                        </div>  
                    </div>
                </div>
            </div>
    </div>
</section>

@endsection

