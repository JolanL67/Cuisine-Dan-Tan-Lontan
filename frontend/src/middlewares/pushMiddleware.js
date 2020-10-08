import axios from 'axios';
import { PUSH_DATA } from '../action/push';

const pushMiddleware = (store) => (next) => (action) => {

  function onlyUnique(value, index, self) {
    return self.indexOf(value) === index;
  }
  // console.log('on a intercepté une action dans le middleware: ', action);
  switch (action.type) {
    case PUSH_DATA: {
      const { name, firstName, phone, adress, mail, message } = store.getState().user;
      const { shortCart, total } = store.getState().menu;
      axios({
        method: 'post',
        url: 'https://api.cuisinelontan974.fr/api/v1/sendsms',
        data: {
          shortCart,
          name,
          firstName,
          phone,
          adress,
          mail,
          message,
          total,
        },
      })
        .then((response) => {
          console.log(response);
          // je voudrais enregistrer response.data dans le state => nouvelle action
          // console.log(response);
        })
        .catch((error) => {
          console.warn(error);
          console.log(error.data);
        });

      next(action);
      break;
    }
    default:
    // on passe l'action au suivant (middleware suivant ou reducer)
      next(action);
  }
};

export default pushMiddleware;
