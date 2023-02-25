function close1()
{
    document.getElementById('editing').style="display:none";
}

function edit(id,fname,lname,salary)
{
    var idfield=document.getElementById('e_id');
    document.getElementById('editing').style="display:flex";
    document.getElementById('h1').innerHTML="UPDATE";
    idfield.value=id;
    document.getElementById('f_name').value=fname;
    document.getElementById('l_name').value=lname;
    document.getElementById('e_sal').value=salary;
    idfield.style="pointer-events:none";
    document.getElementById('form').action="edit.php"
    document.getElementById('submit').name="edit";
}

function add()
{
    var idfield=document.getElementById('e_id');
    idfield.value="";
    idfield.style="pointer-events:auto";
    document.getElementById('f_name').value="";
    document.getElementById('l_name').value="";
    document.getElementById('e_sal').value="";
    document.getElementById('editing').style="display:flex;";
    document.getElementById('h1').innerHTML="ADD";
    document.getElementById('submit').value="Add";
    document.getElementById('submit').name="insert";
    document.getElementById('form').action="insert.php";
}

function close2()
{
    document.getElementById('group').style="display:none;"
}

function openames()
{
    document.getElementById('group').style="display:flex;"
}