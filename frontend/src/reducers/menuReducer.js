import { SAVE_ALL_MEAL } from '../action/menu';
import {
  ADD_TO_CART,
  REMOVE_ITEM,
  SUBSTRACT_QUANTITY,
  ADD_QUANTITY,
} from '../action/cart';

const initialState = {
  meals: [],
  cart: [],
  total: 0,
};

const menuReducer = (state = initialState, action = {}) => {
  if (action.type === ADD_TO_CART) {
    let newTotal = +state.total + +action.item.price;
    return {
      ...state,
      cart: [...state.cart, action.item],
      total: newTotal,
    };
  }

  if (action.type === REMOVE_ITEM) {
    let new_items = state.cart.filter((item) => action.item.name !== item.name);
    let newTotal = +state.total - +action.item.price;

    return {
      ...state,
      cart: new_items,
      total: newTotal,
    };
  }
// ============================================= okay jusqu'ici =========================================================
  if (action.type === ADD_QUANTITY) {
    let addedItem = state.meals.find(item=> item.id === action.id);
    addedItem.quantity += 1;
    let newTotal = state.total + addedItem.price;
    return {
      ...state,
      total: newTotal,
    };
  }

  if (action.type === SUBSTRACT_QUANTITY) {
    let addedItem = state.meals.find(item=> item.id === action.id);
    if (addedItem.quantity === 1) {
      let new_items = state.cart.filter(item=>item.id !== action.id);
      let newTotal = state.total - addedItem.price;
      return {
        ...state,
        cart: new_items,
        total: newTotal,
      };
    } {
      addedItem.quantity -= 1;
      let newTotal = state.total - addedItem.price;
      return {
        ...state,
        total: newTotal,
      };
    }
  }

  if (action.type === SAVE_ALL_MEAL) {
    return {
      ...state,
      meals: action.meal,
    };
  }
  return state;
};

export default menuReducer;
