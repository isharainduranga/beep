



    <!----Bottom Footer Start---->
    <div class="impl_btm_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p class="impl_copyright">Copyright &copy; 2020 Stephen Innovation Pvt(Ltd). All Rights
                        Reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!---- Go To Top---->
    <span class="gotop"><img src="{{asset('FrontEnd/assets/Fimg/images/goto.png')}}" alt=""></span>
    <!--Main js file Style-->
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/ion.rangeSlider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/plugin/magnific/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/plugin/nice_select/jquery.nice-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/custom.min.js')}}"></script>
    <!----------Revolution slider start---------->
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/plugin/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/plugin/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/plugin/revolution/js/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/plugin/revolution/js/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/plugin/revolution/js/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/plugin/revolution/js/revolution.extension.parallax.min.js')}}"> </script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/plugin/revolution/js/revolution.extension.slideanims.min.js')}}"> </script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/plugin/revolution/js/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/plugin/revolution/js/revolution.addon.slicey.min.js')}}"></script>
    <!----------Revolution slider start---------->
    <script type="text/javascript" src="{{asset('FrontEnd/assets/Fjs/js/custom.min.js')}}"></script>
    <!--Main js file End-->

    <!-- ---------slide pannel-------- -->
    <script>
    function openNav() {
        document.getElementById("mySidepanel").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidepanel").style.width = "0";
    }
    </script>

<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

<script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function (e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function (e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
</script>
   <!--Main js file End-->
    <!-- ---------slide pannel-------- -->
    <script>function openNav() {
        document.getElementById("mySidepanel").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidepanel").style.width = "0";
    }
</script>