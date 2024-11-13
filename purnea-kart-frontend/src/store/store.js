import {configureStore} from '@reduxjs/toolkit'
import authSlice from './authSlice'
import wishlistSlice from './wishlistSlice';



const store = configureStore({
    reducer:{
        auth : authSlice,
        Wishlist : wishlistSlice
    }
});


export default store;