<!DOCTYPE html>
<html lang="en">

<head>
    <title>CodeBook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/css/style_index.css">

    <?php include('bootstrap_styles.php'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="../styles/dropdownCheckboxes.min.css">

</head>

<body>
    <!-- Main container-->
    <div class="container-fluid landing_box">
        <div class="row row_box">
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="left_box_desc">
                    <h1>Code Book</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, provident est, enim maxime eligendi incidunt odio quis.</p>
                    <div class="buttons-box">
                        <button type="button" class="btn btn-lg btn-outline-primary" data-toggle="modal" data-target="#modalRegister">Sign Up</button>
                        <button type="button" class="btn btn-lg btn-outline-warning" data-toggle="modal" data-target="#modalLogin">Login</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="right_box_logo">
                    <img src="../images/logo_landingpage.jpg" alt="CodeBook logo">
                </div>
            </div>
        </div>
    </div>

    <?php include('bootstrap_scripts.php'); ?>
    <script src="http://ricostacruz.com/jquery.transit/jquery.transit.js"></script>
    <script>
        var background = {}
        background.initialize = function (){
            var $this = this;
            //option
            $this.id = "background_css3";
            $this.style = {bubbles_color:"#007bff",stroke_width:2, stroke_color :"black"};
            $this.bubbles_number = 5;
            $this.speed = [1500,8000]; //milliseconds
            $this.max_bubbles_height = $this.height;
            $this.shape = false // 1 : circle | 2 : triangle | 3 : rect | false :random
            
            if($("#"+$this.id).lenght > 0){
            $("#"+$this.id).remove();
            }
            $this.object = $("<div style='z-inde:-1;margin:0;padding:0; overflow:hidden;position:absolute;bottom:0' id='"+$this.id+"'> </div>'").appendTo("body");
            
            $this.ww = $(window).width()
            $this.wh = $(window).height()
            $this.width = $this.object.width($this.ww);
            $this.height = $this.object.height($this.wh);
            
            $("body").prepend("<style>.shape_background {transform-origin:center; width:80px; height:80px; background: "+$this.style.bubbles_color+"; position: absolute;}</style>");
            
            for (i = 0; i < $this.bubbles_number; i++) {
                $this.generate_bubbles()
            }
            
        }

        background.generate_bubbles = function() {
            var $this = this;
            var base = $("<div class='shape_background'></div>");
            var shape_type = $this.shape ? $this.shape : Math.floor($this.rn(1,3));
            if(shape_type == 1) {
            var bolla = base.css({borderRadius: "50%"})
            }else if (shape_type == 2){
            var bolla = base.css({width:0, height:0, "border-style":"solid","border-width":"0 40px 69.3px 40px","border-color":"transparent transparent "+$this.style.bubbles_color+" transparent", background:"transparent"}); 
            }else{
            var bolla = base; 
            }    
            var rn_size = $this.rn(.8,1.2);
            bolla.css({"transform":"scale("+rn_size+") rotate("+$this.rn(-360,360)+"deg)", top:$this.wh+100, left:$this.rn(-60, $this.ww+60)});        
            bolla.appendTo($this.object);
            bolla.transit({top: $this.rn($this.wh/2,$this.wh/2-60), "transform":"scale("+rn_size+") rotate("+$this.rn(-360,360)+"deg)", opacity: 0},$this.rn($this.speed[0],$this.speed[1]), function(){
            $(this).remove();
            $this.generate_bubbles();
            })
            
            }

        background.rn = function(from, to, arr) {
                if(arr){
                        return Math.random() * (to - from + 1) + from;
                }else{
                    return Math.floor(Math.random() * (to - from + 1) + from);
                }
            }
        background.initialize();

    </script>
    <script src="../resources/bootstrap_js/dropdownCheckboxes.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!--DROPDOWN MULTISELECT -->
    <script>
            $(function() {
                $('.cq-dropdown').dropdownCheckboxes();
            });
    </script>
    
</body>
</html>