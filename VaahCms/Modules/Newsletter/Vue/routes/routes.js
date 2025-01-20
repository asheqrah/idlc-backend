let routes= [];

import dashboard from "./vue-routes-dashboard";
import mails from "./vue-routes-mails"; // add this line in above path

routes = routes.concat(dashboard);
routes = routes.concat(mails); // add this line in above path

export default routes;

