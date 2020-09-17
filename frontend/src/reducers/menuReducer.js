import { SAVE_ALL_MEAL } from '../action/menu';

const initialState = {
  cart: [],
  meals: [],

};

const menuReducer = (state = initialState, action = {}) => {
  switch (action.type) {
    case SAVE_ALL_MEAL:
      return {
        ...state,
        meals: action.meal,
      };
    default: return state;
  }
};
export default menuReducer;
