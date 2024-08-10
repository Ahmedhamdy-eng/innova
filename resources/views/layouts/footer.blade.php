
<footer id="footer" class="clearfix">
    <div id="footer-widgets" class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="widget">
                    <h4 class="text-color-1">Innova Healthcare LLC</h4>
                </div>
                <ul class="widget-list-media">
                    @foreach($socialMediaInformations as $socialMediaInformation)
                        <li>
                            <a href="{{$socialMediaInformation->link}}" target="_blank">
                                <i class="fab fa-{{$socialMediaInformation->name}}"></i>
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="menu-2">
                    <h3 class="widget-title-link-wrap text-color-1">Office</h3>
                    <ul class="widget-list-contact">
                        <li class="meta-address text-color-4">
                            <i class="fa fa-map-marker" aria-hidden="true"> 17, Taka st. 11391, Nasr City,
                                Cairo, Egypt.</i>
                        </li>
                        <li class="meta-address text-color-4">
                            <i class="fa fa-envelope" aria-hidden="true"> innova@innovahealthcare.net</i>
                        </li>
                        <li class="meta-address text-color-4">
                            <i class="fa fa-phone" aria-hidden="true"> + 202 2472 8167</i></a>
                        </li>
                        <li class="meta-address text-color-4">
                            <i class="fa fa-fax" aria-hidden="true"> + 202 2472 8169</i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer><!-- /#footer -->
<div class="widget-social-footer">
    <div class="container">
        <h3>Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            All rights reserved |
            <!-- <a href="https://www.istrotech.com/" target="_blank">  -->
            Egygate Marketing Agency
            <!-- </a> -->
        </h3>
    </div>
</div>
