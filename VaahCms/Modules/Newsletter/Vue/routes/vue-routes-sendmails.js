let routes= [];
let routes_list= [];

import List from '../pages/sendmails/List.vue'
import Form from '../pages/sendmails/Form.vue'
import Item from '../pages/sendmails/Item.vue'

routes_list = {

    path: '/sendmails',
    name: 'sendmails.index',
    component: List,
    props: true,
    children:[
        {
            path: 'form/:id?',
            name: 'sendmails.form',
            component: Form,
            props: true,
        },
        {
            path: 'view/:id?',
            name: 'sendmails.view',
            component: Item,
            props: true,
        }
    ]
};

routes.push(routes_list);

export default routes;

