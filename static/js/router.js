import Article from './view/Article.js';
import Dashboard from './view/Dashboard.js';
import Endocrinology from './view/Endocrinology.js';
// import Event  from './view/Event.js';
import Heart from './view/Heart.js';
import Login from './view/Login.js';
const navigateTo = (url) => {
  history.pushState(null, null, url);
  router();
};

const router = async () => {
  const routes = [
    {
      path: '/',
      view: Dashboard,
    },
    {
      path: '/event',
      view: Event,
    },
    {
      path: '/dien-gia',
      view: () => console.log('view diengia'),
    },
    {
      path: '/login',
      view: Login,
    },
    {
      path: '/tim',
      view: Heart,
    },
    {
      path: '/noi-tuyen',
      view: Endocrinology,
    },
    {
      path: '/sinh-san',
      view: () => console.log('view event'),
    },
    {
      path: '/ung-thu',
      view: () => console.log('view event'),
    },
    {
      path: '/than-kinh',
      view: () => console.log('view event'),
    },
    {
      path: '/da-lieu',
      view: () => console.log('view event'),
    },
    {
      path: '/tam-ly',
      view: () => console.log('view event'),
    },
    {
      path: '/mau',
      view: () => console.log('view event'),
    },
    {
      path: '/article',
      view: Article,
    },
  ];

  //test each router for potential match
  const potentialMatches = routes.map((route) => {
    return {
      route: route,
      isMatch: location.pathname === route.path,
    };
  });

  let match = potentialMatches.find((potentialMatch) => potentialMatch.isMatch);

  if (!match) {
    match = {
      route: routes[0],
      isMatch: true,
    };
  }

  const view = new match.route.view();

  document.querySelector('#app').innerHTML = await view.getHtml();

  // console.log(match.route.view());
};

window.addEventListener('popstate', router);

document.addEventListener('DOMContentLoaded', () => {
  document.body.addEventListener('click', (e) => {
    if (e.target.matches('[data-link]')) {
      e.preventDefault();
      navigateTo(e.target.href);
    }
  });
  router();
});
