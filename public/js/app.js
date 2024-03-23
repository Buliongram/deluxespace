
function navShow() {
    document.getElementById("nav").classList.toggle("navshow");
}
function sideshow() {
    document.getElementById("sidebar").classList.toggle("sideshow");
}
const navLinks = [
    {
        id: "112233",
        name: "Profile",
        icon: `<i class="fa-duotone fa-user"></i>`,
        path: "/profile",
    },
    {
        id: "112234",
        name: "message",
        icon: `<i class="fa-duotone fa-message-lines"></i>`,
        path: "/message",
    },
    {
        id: "112235",
        name: "notifications",
        icon: `<i class="fa-duotone fa-envelope-dot"></i>`,
        path: "/notifications",
    },
    {
        id: "112236",
        name: "settings",
        icon: `<i class="fa-duotone fa-gear"></i>`,
        path: "/settings",
    },
    {
        id: "112237",
        name: "log out",
        icon: `<i class="fa-duotone fa-arrow-right-from-bracket"></i>`,
        path: "/logout",
        color: "logoout",
    },
];

navLinks.forEach((link) => {
    const { id, name, icon, path, color } = link;
    document.getElementById(
        "nav"
    ).innerHTML += `<a href="${path}" class="flex items-center gap-2 w-full cursor-pointer naveLink ${color} text-gray-500 capitalize text-lg font-normal"><span>${icon}</span> <span class="text-sm">${name}</span></a>`;
});

window.onscroll = () => {
    if (
        document.body.scrollTop > 100 ||
        document.documentElement.scrollTop > 100
    ) {
        document.getElementById("headerNav").classList.add("headerNav");
    } else {
        document.getElementById("headerNav").classList.remove("headerNav");
    }
};
