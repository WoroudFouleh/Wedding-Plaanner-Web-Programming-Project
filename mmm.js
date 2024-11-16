
var selectedRow = null;
// show alerts
function showAlert (message , className)
{
    const div = document.createElement("div");
    div.className= `alert alert-${className}`;
    div.appendChild(document.createTextNode(message));
    const container = document.querySelector(".container");
    const main = document.querySelector(".main");
    container.insertBefore(div , main);
    setTimeout(()=> document.querySelector(".alert").remove() , 3000);
}

//Clear All Fields
function ClearFields()
{
    document.querySelector("#fullName").value="";
    document.querySelector("#phoneNumber").value="";
    document.querySelector("#email").value="";
    document.querySelector("#password").value="";
}


//add Data
document.querySelector("#customer-form").addEventListener("submit" , (e)=>{
    e.preventDefault();
    // get from values
    const fullName = document.querySelector("#fullName").value;
    const phoneNumber = document.querySelector("#phoneNumber").value;
    const email = document.querySelector("#email").value;
    const password = document.querySelector("#password").value;

    if(fullName == "" || phoneNumber == "" || email == "" || password == "")
    {
        showAlert("Pleas fill in all field" , "danger");
    }
    else
    {
        if(selectedRow == null){
            const list = document.querySelector("#customer-list");
            const row = document.createElement("tr");
            row.innerHTML = `
            <td>${fullName}</td>
            <td>${phoneNumber}</td>
            <td>${email}</td>
            <td>${password}</td>
            <td>
               <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
               <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
            `;
            list.appendChild(row);
            selectedRow  = null;
            showAlert("Customer Added" , "success");

        }
        else
        {
            selectedRow.children[0].textContent=fullName;
            selectedRow.children[1].textContent=phoneNumber;
            selectedRow.children[2].textContent=email;
            selectedRow.children[3].textContent=password;
            selectedRow = null;
            showAlert("Customer Info Edited" ,"success");
        }
        ClearFields();
    }
});

// Edit Data
document.querySelector("#customer-list").addEventListener("click" , (e)=>{
    const  target = e.target;
    if(target.classList.contains("edit")){
        selectedRow = target.parentElement.parentElement;
        document.querySelector("#fullName").value = selectedRow.children[0].textContent;
        document.querySelector("#phoneNumber").value = selectedRow.children[1].textContent;
        document.querySelector("#email").value = selectedRow.children[2].textContent;
        document.querySelector("#password").value = selectedRow.children[3].textContent;
    }
});


// Delete Data
document.querySelector("#customer-list").addEventListener("click" , (e)=>{
    const target = e.target;
    if(target.classList.contains("delete")){
        target.parentElement.parentElement.remove();
        showAlert("Customer Data Deleted", "danger");
    }
});
