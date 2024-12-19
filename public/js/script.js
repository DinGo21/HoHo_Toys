const path = window.location.pathname.split('/').pop();

function setHeaderNavLinkActive(path)
{
    const childrenLink = document.getElementById("childrenLink");
    const toysLink = document.getElementById("toysLink");

    console.log(path);
    if (path === "santa")
    {
        childrenLink.classList.add("headerNavLinkActive");
    }
    if (path === "elf")
    {
        toysLink.classList.add("headerNavLinkActive");
    }
}

setHeaderNavLinkActive(path);
