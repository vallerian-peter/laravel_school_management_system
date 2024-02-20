function previewImage(input, studentAvatar)
{
    var previewContainer = document.getElementById('imagePreview');
    var previewImage = document.getElementById('previewImg');
    var file = input.files[0];

    if(file)
    {
        var reader = new FileReader();

        reader.onload = function(event)
        {
            previewImage.src = event.target.result;
            previewContainer.style.maxWidth = 'none';
        };

        reader.readAsDataURL(file);
    }
    else
    {
        previewImage.src = studentAvatar ? "{{ asset('storage/') }}" + studentAvatar : "{{ asset('AdminLTE-3.2.0/AdminLTE-3.2.0/dist/img/user2-160x160.jpg') }}";
        previewContainer.style.maxWidth = '10px';
    }
}


function validatePassword()
{
    
    var currentPass = document.getElementById('current_password');
    var newPass = document.getElementById('new_password');
    var newPassValue = document.getElementById('new_password').value;
    var confirmPass = document.getElementById('confirm_password');
    var confirmPassValue = document.getElementById('confirm_password').value;
    var Message = document.getElementById('confirmPassMessage');

    if(confirmPassValue != "" && newPassValue != "")
    {
        if(confirmPassValue === newPassValue) 
        {
            Message.innerHTML = "Password Match";
            Message.className = "text-success";
            confirmPass.style.border = "1px solid green";
        }
        else
        {
            Message.innerHTML = "Password Don't Match";
            Message.className = "text-danger";
            confirmPass.style.border = "1px solid red";
        }
    }
    else if(confirmPassValue != "" && newPassValue == "")
    {
        Message.innerHTML = "New Password Field is Empty";
        Message.className = "text-warning";
        confirmPass.style.border = "1px solid yellow";
    }
    else
    {
        Message.innerHTML = "";
        Message.className = "";
        confirmPass.style.border = "";
    }
}

// show and hide password
const showpass = document.getElementById("show-password");
const inputpass = document.getElementById("password");
const word = document.getElementById("label-word");

showpass.addEventListener('change', ()=>{
    if(inputpass.type == 'password'){
        inputpass.type = 'text';
        word.innerHTML = "Hide Password";
    }
    else
    {
        inputpass.type = 'password';
        word.innerHTML = "Show Password";
    }
});
// ends here

