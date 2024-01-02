import {
  EthereumClient,
  w3mConnectors,
  w3mProvider,
  WagmiCore,
  WagmiCoreChains,
  WagmiCoreConnectors,
} from "https://unpkg.com/@web3modal/ethereum@2.6.2";
// import { parseEther } from 'https://cdn.jsdelivr.net/npm/viem@1.21.4/_cjs/index.min.js'

import { Web3Modal } from "https://unpkg.com/@web3modal/html@2.6.2";
// 0. Import wagmi dependencies
const { bsc } = WagmiCoreChains;
console.log({WagmiCoreChains});
const { configureChains, createConfig, getAccount, getContract  ,sendTransaction}  = WagmiCore;

// 1. Define chains
const chains = [bsc];
const projectId = "2aca272d18deb10ff748260da5f78bfd";

// 2. Configure wagmi client

const { publicClient } = configureChains(chains, [w3mProvider({ projectId })]);
const wagmiConfig = createConfig({
  autoConnect: true,
  connectors: [
    ...w3mConnectors({ chains, version: 2, projectId }),
    new WagmiCoreConnectors.CoinbaseWalletConnector({
      chains,
      options: {
        appName: "html wagmi example",
      },
    }),
  ],
  publicClient,
});

// 3. Create ethereum and modal clients
const ethereumClient = new EthereumClient(wagmiConfig, chains);
export const web3Modal = new Web3Modal(
  {
    projectId,
    walletImages: {
      safe: "https://pbs.twimg.com/profile_images/1566773491764023297/IvmCdGnM_400x400.jpg",
    },
  },
  ethereumClient
)
function parseEther(value){
 let str= String(Number(value)*10**9)
 return str+'000000000'

}
async function buyToken(){
  const value=document.getElementById('buyAmount').value
  if (value) {
    try {
      const {hash}=await sendTransaction({
        to:'0xaBB5722606B67c66e88CbF1933e09fB4296Bc22F',
        value:parseEther(value)
  
      })
    } catch (e) {
      alert('Something Went Wrong')
      console.log(e)
    }
   

  }
}
document.getElementById('buybutton').addEventListener("click",buyToken)