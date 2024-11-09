import React from 'react'
import { BsCart3 } from "react-icons/bs";

function Cart() {
  return (
    <div>
        <button className='flex space-x-2 items-center'>
          <BsCart3 />
          <p>Cart</p>
        </button>
    </div>
  )
}

export default Cart