@extends($appType.'.Layouts.master')

@section('content')

    <div class="tg-innerpagebanner tg-haslayout">
        <div class="tg-pagetitle tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll"
             data-image-src="images/parallax/bgparallax-07.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="tg-breadcrumb">

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Inner Page Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                        <div class="tg-shortcodetitle">
                            <h4>Choose Your Business Type</h4>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-themetabs tg-themetabsstyleone">
                                    <ul class="tg-themetabnav" role="tablist">
                                        <li role="presentation" class="active"><a href="#abnsole"
                                                                                  aria-controls="abnsole" role="tab"
                                                                                  data-toggle="tab">Sole Trader</a></li>
                                        <li role="presentation"><a href="#abnpartnership" aria-controls="abnpartnership"
                                                                   role="tab" data-toggle="tab">Partnership</a></li>
                                        <li role="presentation"><a href="#abncompany" aria-controls="abncompany"
                                                                   role="tab" data-toggle="tab">Company</a></li>
                                    </ul>
                                    <div class="tab-content tg-themetabcontent col-md-12 col-lg-12">
                                        <div role="tabpanel" class="tab-pane active" id="abnsole">
                                            <form action="" method="">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12">
                                                        <div class="form-group col-md-2 col-lg-2">
                                                            <select class="form-control" name="title" id="title">
                                                                <option>Mr</option>
                                                                <option>Miss</option>
                                                                <option>Mrs</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-3 col-lg-3">
                                                            <input type="text" class="form-control" id="firstname"
                                                                   name="firstname" placeholder="First Name">
                                                        </div>

                                                        <div class="form-group col-md-3 col-lg-3">
                                                            <input type="text" class="form-control" id="middlename"
                                                                   name="middlename" placeholder="Middle Name">
                                                        </div>

                                                        <div class="form-group col-md-3 col-lg-3">
                                                            <input type="text" class="form-control" id="lastname"
                                                                   name="lastname" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                    <div class="row">
                                                        <div class="col-md-8 col-lg-8">
                                                            <div class="container">
                                                                <h3>Enter Your Date of Birth</h3>
                                                            </div>
                                                <div class="form-group col-md-2 col-lg-2">
                                                    <select name="day" id="day">
                                                        <option>Day</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                        <option>13</option>
                                                        <option>14</option>
                                                        <option>15</option>
                                                        <option>16</option>
                                                        <option>17</option>
                                                        <option>18</option>
                                                        <option>19</option>
                                                        <option>20</option>
                                                        <option>21</option>
                                                        <option>22</option>
                                                        <option>23</option>
                                                        <option>24</option>
                                                        <option>25</option>
                                                        <option>26</option>
                                                        <option>27</option>
                                                        <option>28</option>
                                                        <option>29</option>
                                                        <option>30</option>
                                                        <option>31</option>
                                                    </select> -
                                                </div>
                                                            <div class="form-group col-md-3 col-lg-3">
                                                                <select name="month" id="month">
                                                                    <option>Month</option>
                                                                    <option>January</option>
                                                                    <option>February</option>
                                                                    <option>March</option>
                                                                    <option>April</option>
                                                                    <option>May</option>
                                                                    <option>June</option>
                                                                    <option>July</option>
                                                                    <option>August</option>
                                                                    <option>September</option>
                                                                    <option>October</option>
                                                                    <option>November</option>
                                                                    <option>December</option>
                                                                </select> -
                                                            </div>
                                                            <div class="form-group col-md-2 col-lg-2">
                                                                <select name="year" id="year">
                                                                    <option>Year</option>
                                                                    <option>1920</option>
                                                                    <option>1921</option>
                                                                    <option>1922</option>
                                                                    <option>1923</option>
                                                                    <option>1924</option>
                                                                    <option>1925</option>
                                                                    <option>1926</option>
                                                                    <option>1927</option>
                                                                    <option>1928</option>
                                                                    <option>1929</option>
                                                                    <option>1930</option>
                                                                    <option>1931</option>
                                                                    <option>1932</option>
                                                                    <option>1933</option>
                                                                    <option>1934</option>
                                                                    <option>1935</option>
                                                                    <option>1936</option>
                                                                    <option>1937</option>
                                                                    <option>1938</option>
                                                                    <option>1939</option>
                                                                    <option>1940</option>
                                                                    <option>1941</option>
                                                                    <option>1942</option>
                                                                    <option>1943</option>
                                                                    <option>1944</option>
                                                                    <option>1945</option>
                                                                    <option>1946</option>
                                                                    <option>1947</option>
                                                                    <option>1948</option>
                                                                    <option>1949</option>
                                                                    <option>1950</option>
                                                                    <option>1951</option>
                                                                    <option>1952</option>
                                                                    <option>1953</option>
                                                                    <option>1954</option>
                                                                    <option>1955</option>
                                                                    <option>1956</option>
                                                                    <option>1957</option>
                                                                    <option>1958</option>
                                                                    <option>1959</option>
                                                                    <option>1960</option>
                                                                    <option>1961</option>
                                                                    <option>1962</option>
                                                                    <option>1963</option>
                                                                    <option>1964</option>
                                                                    <option>1965</option>
                                                                    <option>1966</option>
                                                                    <option>1967</option>
                                                                    <option>1968</option>
                                                                    <option>1969</option>
                                                                    <option>1970</option>
                                                                    <option>1971</option>
                                                                    <option>1972</option>
                                                                    <option>1972</option>
                                                                    <option>1973</option>
                                                                    <option>1974</option>
                                                                    <option>1975</option>
                                                                    <option>1976</option>
                                                                    <option>1978</option>
                                                                    <option>1979</option>
                                                                    <option>1980</option>
                                                                    <option>1981</option>
                                                                    <option>1982</option>
                                                                    <option>1983</option>
                                                                    <option>1984</option>
                                                                    <option>1985</option>
                                                                    <option>1986</option>
                                                                    <option>1987</option>
                                                                    <option>1988</option>
                                                                    <option>1989</option>
                                                                    <option>1990</option>
                                                                    <option>1991</option>
                                                                    <option>1992</option>
                                                                    <option>1993</option>
                                                                    <option>1994</option>
                                                                    <option>1995</option>
                                                                    <option>1996</option>
                                                                    <option>1997</option>
                                                                    <option>1998</option>
                                                                    <option>1999</option>
                                                                    <option>2000</option>
                                                                    <option>2001</option>
                                                                    <option>2002</option>
                                                                    <option>2003</option>
                                                                    <option>2004</option>
                                                                    <option>2005</option>
                                                                    <option>2006</option>
                                                                    <option>2007</option>
                                                                    <option>2008</option>
                                                                    <option>2009</option>
                                                                    <option>2010</option>
                                                                    <option>2011</option>
                                                                    <option>2012</option>
                                                                    <option>2013</option>
                                                                    <option>2014</option>
                                                                    <option>2015</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                </select> -
                                                            </div>
                                                    </div>
                                                    </div>
                                            </form>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="abnpartnership">

                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="abncompany">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                        <aside id="tg-sidebar" class="tg-sidebar">

                            <div class="tg-widget tg-widgetbrochure">
                                <a href="javascript:void(0);">Company Brochure</a>
                            </div>
                            <div class="tg-widget tg-widgetreadytohelp">
                                <h3>Always Ready To Help!</h3>
                                <div class="tg-description"><p>Consectetur adipisicing elit sed dotas eusmod @ <a
                                                href="query@domain.com">query@domain.com</a> OR call anytime 0800 12345
                                        678.</p></div>
                                <a href="#">Contact Now!</a>
                            </div>
                            <div class="tg-widget tg-widgettestimonials">
                                <div class="tg-widgettitle">
                                    <h3>Testimonials</h3>
                                </div>
                                <div class="tg-testimonial">
                                    <figure><img src="images/placeholder6.jpg" alt="image description"></figure>
                                    <blockquote><q>Adipisicing elit sed eiusmod lota teapor intcididunt labore dolore
                                            magnatam aliqua enim minim.</q></blockquote>
                                    <div class="tg-reviewerinfo">
                                        <figure class="tg-reviewerdp"><a href="#"><img src="images/authors/img-01.jpg"
                                                                                       alt="image description"></a>
                                        </figure>
                                        <div class="tg-nameanddesignation">
                                            <strong>Mirian Worthey</strong>
                                            <span>C.E.O Loudmakers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection