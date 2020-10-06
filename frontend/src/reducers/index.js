import { combineReducers } from 'redux';

// Reducer import
import menuReducer from './menuReducer';
import informationReducer from './informationReducer';
import userReducer from './userReducer';

const rootReducer = combineReducers({
  menu: menuReducer,
  information: informationReducer,
  user: userReducer,
});


export default rootReducer;
