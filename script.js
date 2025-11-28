let addbtn = document.getElementById("addbtn");
let todoname = document.getElementById("todoname").value;
let todolistname;
let listitem = document.getElementById("listitem");
let deletebtn= document.getElementById('deletebtn');

addbtn.addEventListener("click", (e) => {
e.preventDefault();
  if (todoname == "") {
    alert("Enter a todo name");
  } else if (todoname !== "") {
    alert('Your Todo create successfully');
    todolistname = todoname;
    console.log(todolistname);
    listitem.innerText = todolistname;
  }
});


deletebtn.addEventListener('click',()=>{
listitem.delete();
alert("yupppppppppppp")

});