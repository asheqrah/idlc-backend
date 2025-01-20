let routes= [];
let routes_list= [];

import List from '../pages/mails/List.vue'
import Form from '../pages/mails/Form.vue'
import Item from '../pages/mails/Item.vue'

routes_list = {

    path: '/mails',
    name: 'mails.index',
    component: List,
    props: true,
    children:[
        {
            path: 'form/:id?',
            name: 'mails.form',
            component: Form,
            props: true,
        },
        {
            path: 'view/:id?',
            name: 'mails.view',
            component: Item,
            props: true,
        }
    ]
};

routes.push(routes_list);

export default routes;

