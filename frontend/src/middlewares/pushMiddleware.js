/* import axios from 'axios';
import { PUSH_GET } from '../action/push';

const pushMiddleware = (store) => (next) => (action) => {
  // console.log('on a intercepté une action dans le middleware: ', action);
  switch (action.type) {
    case PUSH_GET:
      axios.get('https://smsapi.free-mobile.fr/sendmsg?user=22824044&pass=DXfwhuR1V22wCx&msg=Salut%20Rose%20!')
        .then((response) => {
        // console.log(response.data);
        })
        .catch((error) => {
        // console.warn(error);
        });
      next(action);
      break;

    default:
    // on passe l'action au suivant (middleware suivant ou reducer)
      next(action);
  }
};

export default pushMiddleware;
 */