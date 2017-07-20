function pageLoad(){
document.getElementById("btn").onclick = loadData;
}

function loadData() {
    
    $.ajax({
           
           url: "books.xml",
           dataType: "xml",
           success: function(data) {
            alert("file is loaded");
            $(data).find('book').each(function(){

            var title = $(this).find('title').text();
            var author = $(this).find('author').text();
            var year = $(this).find('year').text();
            var price = $(this).find('price').text();

            $("table").append('<tr><td>' + title + '</td><td>' + author + '</td><td>' + year + '</td><td>' + price + '</td></tr>');
          });
           
           },
           error: function() { alert("error loading file");  }
           });
}


window.onload = pageLoad;
