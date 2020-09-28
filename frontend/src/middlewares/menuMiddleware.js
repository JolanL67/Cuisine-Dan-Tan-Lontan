import axios from 'axios';
import { GET_ALL_MEAL, saveAllMeal } from '../action/menu';

const menuMiddleware = (store) => (next) => (action) => {
  // console.log('on a intercepté une action dans le middleware: ', action);
  switch (action.type) {
    case GET_ALL_MEAL:
      axios.get('https://api.cuisinelontan974.fr/api/v1/menu')
        .then((response) => {
        console.log(response);
        // je voudrais enregistrer response.data dans le state => nouvelle action
        // console.log(response);
        store.dispatch(saveAllMeal(response.data));
        })
        .catch((error) => {
          console.warn(error);
        });
      next(action);
      break;


    default:
    // on passe l'action au suivant (middleware suivant ou reducer)
      next(action);
  }
};

export default menuMiddleware;
