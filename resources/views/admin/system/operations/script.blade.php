<script>
    var d = new Date();
    let table = new Array();
    var somme = 0;
    var reset = 0;
    var strDate = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();
    $('#list_add').click(function() {
        var name = $('#article_Lname')
        var qte = $('#article_Lqte');
        var prix = $('#article_Lprix');
        var date = $('#article_Ldate');
        let obj = {
            'name': name.val(),
            'qte': qte.val(),
            'prix': prix.val() * qte.val(),
            'date': date.val()
        };
        table.push(obj);
        name.val("");
        qte.val("");
        prix.val("");
        date.val("");
        somme = somme + obj.prix;
        reset = somme;
        var html;
        table.forEach((e, index) => {
            html += `<tr><td>1</td>
        <td>` + table[index].name + `</td>
        <td>` + table[index].qte + `</td>
        <td>` + Math.trunc(table[index].prix * 100) / 100 + `</td></tr>`;

        });
        $('#tbodyArticle').html(html);
        $('#total').html(somme.toString());
        $('#total_input').val(somme);
        // alert(table.length);
    });

    function tva_change() {
        alert($('#tva').val());
        somme = somme / $('#tva').val();
        $('#total').html(somme.toString());
        $('#total_input').val(somme);
    }
    $('#tva').keyup(function(e) {
        if (e.keyCode == 8 || e.keyCode == 46) {
            somme = reset;
        }
    });
</script>
