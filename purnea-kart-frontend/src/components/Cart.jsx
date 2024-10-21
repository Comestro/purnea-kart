import React from 'react'
import { FaShoppingCart } from 'react-icons/fa';

function Cart() {
  return (
    <div>
        <button className='flex space-x-2 items-center font-medium '>
            <FaShoppingCart/>
            <p>Cart</p>
        </button>
    </div>
  )
}

export default Cart