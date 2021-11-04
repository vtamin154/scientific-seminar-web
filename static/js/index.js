import Dashboard from "./view/Dashboard.js";
const navigateTo = url =>{
    history.pushState(null, null, url);
    router();
};

const router = async() =>{
    const routes = [
        {
            path:'/',
            view: Dashboard
        },
        {
            path:'/event',
            view: () => console.log("view event")
        },
        {
            path:'/diengia',
            view: () => console.log("view diengia")
        },
        {
            path:'/login',
            view: () => console.log("view login")
        },
    ];

    //test each router for potential match
    const potentialMatches = routes.map(route =>{
        return {
            route: route,
            isMatch:location.pathname === route.path
        }
    });

    let match = potentialMatches.find(potentialMatch => potentialMatch.isMatch)

    if(!match){
        match = {
            route: routes[0],
            isMatch:true
        }
    }

    const view = new match.route.view();

    document.querySelector('#app').innerHTML = await view.getHtml();
    
    console.log(match.route.view());
};

window.addEventListener("popstate", router);

document.addEventListener("DOMContentLoaded", () =>{
    document.body.addEventListener('click', e => {
        if(e.target.matches("[data-link]")){
            e.preventDefault();
            navigateTo(e.target.href);
        }
    })
    router();
})