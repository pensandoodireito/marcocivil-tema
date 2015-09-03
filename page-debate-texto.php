<?php get_header(); ?>
<div class="menu-topo-mc">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-sm">
                <select class="form-control">
                    <option>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</option>
                    <option>Ut non luctus libero. Maecenas eleifend tempor diam, at varius neque efficitur eget. Nunc
                        quis convallis metus
                    </option>
                    <option>Vivamus euismod viverra blandit. Aenean lobortis, felis vel commodo accumsan, lacus magna
                        sollicitudin nulla
                    </option>
                    <option>Nam finibus nunc lorem, vel tincidunt leo ultricies id. Praesent varius metus lorem, ut
                        tempus neque condimentum nec
                    </option>
                    <option>Vivamus laoreet finibus justo, in feugiat magna lacinia id. Curabitur scelerisque nunc eros,
                        a sollicitudin mi tincidunt non
                    </option>
                </select>
            </div>
            <div class="col-md-3 mt-sm">
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="col-md-3 mt-sm">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Busque na página">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </div>
            <div class="col-md-3 mt-sm">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default" disabled="disabled" data-toggle="tooltip" data-placement="bottom" title="Resultado da busca">2 de 5</button>
                    <button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 2500px;"> bla bla</div>
<div class="back-to-top">
    <a href="#" class="white"><i class="fa fa-level-up"></i> Voltar para o topo</a>
</div>
<?php get_footer(); ?>
<script>
    jQuery("document").ready(function ($) {
        var menutop = $('.menu-topo-mc');
        var position = menutop.offset().top;
        $(window).scroll(function () {
            var fixing = ($(this).scrollTop() > position) ? true : false;
            menutop.toggleClass("fixed-top-mc", fixing);
        });
    });
</script>
