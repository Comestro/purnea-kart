import {configureStore} from '@reduxjs/toolkit'
import authReducer from '../services/auth';



const store = configureStore({
    reducer:{
        auth : authReducer,
    }
});


export default store;