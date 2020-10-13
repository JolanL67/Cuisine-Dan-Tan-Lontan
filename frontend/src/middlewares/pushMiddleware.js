import axios from 'axios';
import { cleanData, errorMessage, PUSH_DATA, succesMessage } from '../action/push';

const pushMiddleware = (store) => (next) => (action) => {

  // console.log('on a intercepté une action dans le middleware: ', action);
  switch (action.type) {
    case PUSH_DATA: {
      const { name, firstName, phone, adress, mail, message } = store.getState().user;
      const { shortCart, total } = store.getState().menu;
      axios({
        method: 'post',
        url: 'https://api.cuisinelontan974.fr/api/v1/sendsm',
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
          store.dispatch(succesMessage());
          store.dispatch(cleanData());
        })
        .catch((error) => {
          store.dispatch(errorMessage());
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
