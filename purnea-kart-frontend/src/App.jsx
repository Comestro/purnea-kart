import React from 'react'
import { Provider } from 'react-redux'
import store from './store/store'
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import SignUp from './components/SignUp'
import Home from './components/Home'
import Login from './components/Login'
import Product_Page from './components/Product_Page/Product_Page'
import Products from './components/Products/Products'






function App() {
  return (
   <Provider store={store}>
     <BrowserRouter>
      <Routes>
        <Route path="/home" element={<Home/>}/>
        <Route path="/signup" element={<SignUp />} />
        <Route path="/login" element={<Login />} /> 
        <Route path="/products/:slug" element={<Product_Page/>} />
      </Routes>
     </BrowserRouter>
   </Provider>
  )
}

export default App