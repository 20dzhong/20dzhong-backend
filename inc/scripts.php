<!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        function hideSidebar() {
            var link = document.getElementById('sidebar');
            link.style.display = 'none'; //or
        }

        function showSidebar() {
            var link = document.getElementById('sidebar');
            link.style.display = 'inline'; //or
        }

        function transposeChord(amount) {
            var scale = ["C", "Db", "D", "Eb", "E", "F", "Gb", "G", "Ab", "A", "Bb", "B"];
            var lines = document.getElementById("formatted-song").children;

            for (var i = 0; i < lines.length; i++) {
                var curr = lines[i].innerHTML;
                lines[i].innerHTML = curr.replace(/[CDEFGAB]b?/g,
                function(match) {
                    var i = (scale.indexOf(match) + amount) % scale.length;
                    return scale[ i < 0 ? i + scale.length : i ];});
            }
        }

        function changeFont(increaseFactor) {
            var children = document.getElementById("formatted-song").children;

            for (var i = 0; i < children.length; i++) {
                var child = children[i];
                var fontSize = window.getComputedStyle(child).getPropertyValue("font-size");
                child.style.fontSize = parseInt(fontSize) + increaseFactor + "px";
            }
        }
        
        function highlightChord() {
            var lines = document.getElementById("song").innerHTML.split(/<br>|<br\/>/i);
            var formatted = document.getElementById("formatted-song");
            for (var i = 0; i < lines.length; i++) {
                var elem = document.createElement('div');
                elem.innerHTML = lines[i];
                formatted.appendChild(elem);
            }

            var child = document.getElementById("formatted-song").children;
            for (var i = 0; i < child.length; i++) {
                var curr = child[i].innerHTML;
                child[i].innerHTML = curr.replace(/\b[A-G](#|b)?(maj|min|dim|aug|sus)?(6|7|9|11|13)?\b/g,
                function(match) {
                    return "<span class='tabs'>" + match + "</span>";});
            }
        }

        function populateMenu() {
            var list = document.getElementById("pListSide").innerHTML;
            document.getElementById("pListMenu").innerHTML = list;
        }

        function start() {
            highlightChord();
            populateMenu();
        }

        function searchSong() {
            let input = document.getElementById('searchBar').value
            input=input.toLowerCase();
            let x = document.getElementById('pListMenu').getElementsByClassName('songLst');
            
            for (i = 0; i < x.length; i++) { 
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display="none";
                }
                else {
                    x[i].style.display="list-item";                 
                }
            }
        }


    </script>