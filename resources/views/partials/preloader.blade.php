  <div class="preloader">
      <div style="display:flex; flex-grow: 1; justify-content: center; align-items: center; align-self: center; height: 100%;">
        <lottie-player autoplay loop mode="normal" style="width: 100px"></lottie-player> 
      </div>
    </div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script type="text/javascript">
      const player = document.querySelector("lottie-player");
      player.load(
        '{"v":"5.5.7","meta":{"g":"LottieFiles AE 0.1.20","a":"ayaz","k":"","d":"","tc":""},"fr":24,"ip":0,"op":72,"w":500,"h":500,"nm":"SamugaaLogoAE 2","ddd":0,"assets":[{"id":"image_0","w":24,"h":16,"u":"","p":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAQCAYAAAAMJL+VAAABDElEQVQ4T7WUTW6CQBhA31dMt2UDcekNyhF6g3oDuUB/OEF7A1APUI+gN/AGcgSX2m7sskTGZhJMjM6Mg7ZsSMjHey/wgfAPx5i4ryBRVIW04ed0e1CHGV/l/j59rQM9hXoQSAB9nm6pXjM2G2+BBgUoDb5zRH0LpE98TvczXoKcMAy4nQP3Dvispkp19eGMl2BErIseLfCT6laCIVEhyIsFbqz2FoyIUpAPA9xZ7SXIiZIAWRjgZ6vPCiwb413tFFg2plW1UzAmnuxg0AxdVG0VDInfBd6agYurjYKDjbm6+kTQbMwcpKz56R9/jW3+V8ez0rzUEqR4Zl1cAzPdK/q5K24mGavlX8M17xfpTWXAw1hWuwAAAABJRU5ErkJggg==","e":1},{"id":"image_1","w":36,"h":38,"u":"","p":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAmCAYAAACsyDmTAAADZklEQVRYR82Xz08TQRTH37TbUhYUFNIWQX6IiQktoRoSicFYTTyZldbEeLTEP8BeNPEkXkz0Yr17gIOJhkTAojExQYgcTIzYhsIJgqAGilFay49Al46ZtVu322m3ZbfFubUz8+az733ffHcR/Cdj2W93IoQdaL951oYc1XGG78MANxM807KvQGF/uwsA+wCgCQE8NnMh774ALQ85mnWGuA8w6klWKGrkmeZD7kCk5EArozYvwqgPAKpEuSCMes2Xp/vJ75IBrb6yORIJ5EMA52S6DVq4kCMFV2xRE9HuMLwXAO7SzkoAnK/jQuMlASKtrAMgpWiiPzgasHDTHulcUUr2Nyu7PgB8PUcFogmecdS5A1+KCrT6st2DkdDKKdGKnST7756FCxFxpw3NMkRaGTF8P0W0UYSRFyNMDhdLt2jhQs207GkCFPbbyWFEuLKsoAEjr/dmihq5Ldz0sOZASdGS8nTIgi8mADyke4RLkOEDIiwGmLByIWc2be0pQ1L/oQRO00Z41DYsuZGB+JVcyKpFHTx7JFbjqao0mPXSWFGkw07zpRmSDWEkM/hOcscIfpXr7is4Q4ELDUPrYxsuXYUOGu7XQtkxgyR++r0S9tsJnFjOlF9pBjR7paUp8ia6kNjEwoPkgkp61qNUdiR+pRnQ1Enr3Obn7VZpwGxQANgl6bo0v9IEaLbn6LVfI+vPaMHoUP9Wyv1KE6CPrea17fl4dbZg2aEy/Uo1UPBiw5PY240buQJl0RTVr1QBESH/nojN8T93GSUgChTVr1QBBbvrx2OTm/KXKkU26+3DP44/nDcrLpQtyHkPzVxt7F4bjL0vNGhZqyHCnjJxtsGlyUL35gT6ZLMsb83sWPMNqmMRPuhkH9hff7uT7x75uqxAIa7RG/HHUheb0gEVp02BsnqTq+3FwqLS2j1p6ENNbTwfITM1er7yDHvL7l8irq96UDMk+pVS9APd7ETH5PesrxJK+2nzGUByv6JtUiNaJcgMIJpfiUGIaNkudsQx9s2tFHiv82lAufyq3GZcKT/BdqkVrRJoGhDNr7QWbd5ANL/SqpWVIKTzQobkQjbWM1uVnabetpGvzwsJpsVaAUj0q1KIVgkaiX5VzFZWgkgr2VRn3ZLRrH+qxn8KOVBpbcFfHUoB1c7/AQ02YFOcTvwYAAAAAElFTkSuQmCC","e":1},{"id":"image_2","w":113,"h":113,"u":"","p":"data:image/png;base64,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","e":1},{"id":"image_3","w":74,"h":75,"u":"","p":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEoAAABLCAYAAADXjBHUAAACG0lEQVR4Xu3cQS4DYRyG8f/HpGs2Wiv22ugNsDeiJ8AN6gR6A3OEOoHEsMYJVFprrKgNtjL6yTBqWiFv2U2ebvu2yffLM7P8nPH5UeDusL44Fby2ymF32+H0XeDxsD7zEiRNM9vzzu9W1q8ioMac+nFt08xHZrZgZrflsLeYToDKoNLHzAVJ25mtfNo573bmNrptoDKR++OlpvNuPx+XNzuvhL3VIRrvKLOHk6W6H7i0nOVPj4HZ2nzYOwNqrJDsBZ7CLI/XxKP3A9YgCTbnG52b/Ne8zMV3D1BAiQLijKKAEgXEGUUBJQqIM4oCShQQZxQFlCggzigKKFFAnFEUUKKAOKMooEQBcUZRQIkC4oyigBIFxBlFASUKiDOKAkoUEGcUBZQoIM4oCihRQJxRFFCigDijKKBEAXFGUUCJAuKMooASBcQZRQElCogzigJKFBBnFAWUKCDOKAooUUCcURRQooA4oyigRAFxRlFAiQLijKKAEgXEGUUBJQqIM4oCShQQZxT1V6j0eqDx6zbE/yr0bKSoj6vKkuv8vUmFPv0EhxuB6se1tpnfSn8P1qjiECq7Q+ki/zVYXxpDqPu4epa/tszMns0sKoe91gSFFnb6DnUXV1enzE5zfgelZLo52+g8FfbkEx7sHaofVzvZtWWXA7Nm/sqyCf+vsHP3cFTb9s5H3vlWet9kYU/6z4O5flxtlZIg4jH7XfINPQ94TJ1G+a0AAAAASUVORK5CYII=","e":1},{"id":"comp_0","layers":[{"ddd":0,"ind":1,"ty":2,"nm":"Shadow","refId":"image_0","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[187.103,294.793,0],"ix":2},"a":{"a":0,"k":[11.744,7.966,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":84,"st":0,"bm":0},{"ddd":0,"ind":2,"ty":2,"nm":"Needle","refId":"image_1","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":0,"s":[0]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":8,"s":[-45.48]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":27.2,"s":[58.178]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":37.4,"s":[-1.28]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":45,"s":[178.676]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":51,"s":[201.943]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":56,"s":[137.364]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":62,"s":[263.809]},{"i":{"x":[0.833],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":71,"s":[360]},{"t":79,"s":[360]}],"ix":10},"p":{"a":0,"k":[185.654,246.32,0],"ix":2},"a":{"a":0,"k":[17.964,18.587,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":84,"st":0,"bm":0},{"ddd":0,"ind":3,"ty":2,"nm":"Edge","refId":"image_2","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[185.654,246.32,0],"ix":2},"a":{"a":0,"k":[56.44,56.439,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":84,"st":0,"bm":0},{"ddd":0,"ind":4,"ty":2,"nm":"Gold","refId":"image_3","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":0,"s":[0]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":8,"s":[5.957]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":21,"s":[-15.388]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":39,"s":[98.59]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":52,"s":[74.809]},{"t":72,"s":[180.482]}],"ix":10},"p":{"a":0,"k":[185.606,246.32,0],"ix":2},"a":{"a":0,"k":[36.588,37.404,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":84,"st":0,"bm":0}]}],"layers":[{"ddd":0,"ind":1,"ty":0,"nm":"SamugaaLogoAE","refId":"comp_0","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[491.771,263.609,0],"ix":2},"a":{"a":0,"k":[250,250,0],"ix":1},"s":{"a":0,"k":[376.089,376.089,100],"ix":6}},"ao":0,"w":500,"h":500,"ip":0,"op":72,"st":0,"bm":0}],"markers":[]}'
      );
    </script>