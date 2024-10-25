import React from 'react'
import { Provider } from 'react-redux'
import store from './store/store'
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import SignUp from './components/SignUp'
import Home from './components/Home'





function App() {
  return (
   <Provider store={store}>
     <BrowserRouter>
      <Routes>
        <Route path="/home" element={<Home/>}/>
        <Route path="/signup" element={<SignUp />} />
      </Routes>
     </BrowserRouter>
   </Provider>
  )
}

export default App