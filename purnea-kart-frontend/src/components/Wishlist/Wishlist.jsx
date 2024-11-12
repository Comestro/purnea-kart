import React, { useState } from 'react';
import { fetchWishlist } from '../../services/apiService';
import { IoSearchOutline } from "react-icons/io5";
import {Logo,Button,Login} from '../Index'

function Wishlist() {
    // const [wishlist, setWishlist] = useState([]);
    // const [error,setError]= useState('true');
    // const [loading,setLoading]= useState('null')
    
    // useEffect(()=>{
    //     const loadWishlist = async () => {
    //        try{
    //           const data = await fetchWishlist();
    //           setWishlist(data.categories)
    //           setLoading(false)
    //        }catch(err){
    //          setError(error)
    //          setLoading(false)
    //        }
    //     }
    //     loadWishlist();
    // },[])
    const [wishlist, setWishlist] = useState([
        {
          id: 1,
          name: 'Product 1',
          price: 2999,
          imageUrl: 'https://via.placeholder.com/150', // Replace with actual image URL
        },
        {
          id: 2,
          name: 'Product 2',
          price: 1999,
          imageUrl: 'https://via.placeholder.com/150',
        },
        {
          id: 3,
          name: 'Product 3',
          price: 1599,
          imageUrl: 'https://via.placeholder.com/150',
        },
      ]);

  // Handle removing an item from wishlist
  const removeFromWishlist = (id) => {
    setWishlist(wishlist.filter((item) => item.id !== id));
  };

  // Handle adding an item to the cart
  const addToCart = (item) => {
    console.log(`Added ${item.name} to cart`);
    removeFromWishlist(item.id); // Optionally remove item from wishlist
  };

  return (
    <div className=" bg-gray-100 ">
      <nav>
        <div className='w-full bg-blue-500'>
             <div className='flex justify-between  px-6 '>
                   <div className='max-w-7xl mx-auto flex items-center justify-between'>
                        {/* <Link to='/home'> */}
                        <Logo/>
                        {/* </Link> */}
                    </div> 
                    <div className="hidden md:flex items-center w-[50%] relative">
                        <IoSearchOutline  className='w-5 h-5 text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2'/>
                        <input 
                        className='bg-slate-100 w-full rounded-lg pl-10 pr-4 py-2 border-none'
                        type="search"
                        placeholder='search for Products, Brand and More' />
                    </div>
              </div>
        </div>
      </nav>
      <h2 className="text-2xl font-bold text-gray-800 mb-6">My Wishlist</h2>

      {wishlist.length === 0 ? (
        <p className="text-gray-600">Your wishlist is empty.</p>
      ) : (
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          {wishlist.map((item) => (
            <div key={item.id} className="bg-white shadow rounded-lg overflow-hidden">
              {/* Product Image */}
              <img src={item.imageUrl} alt={item.name} className="w-full h-40 object-cover" />

              {/* Product Info */}
              <div className="p-4">
                <h3 className="text-lg font-semibold text-gray-800">{item.name}</h3>
                <p className="text-gray-600 mb-2">₹{item.price}</p>

                {/* Action Buttons */}
                <div className="flex space-x-2">
                  <button
                    onClick={() => addToCart(item)}
                    className="flex-1 bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400"
                  >
                    Add to Cart
                  </button>
                  <button
                    onClick={() => removeFromWishlist(item.id)}
                    className="flex-1 bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400"
                  >
                    Remove
                  </button>
                </div>
              </div>
            </div>
          ))}
        </div>
      )}
    </div>
  );
}

export default Wishlist;
