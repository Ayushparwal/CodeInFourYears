#include <stdio.h>
#include<limits.h>

int main(void) {
	int T;
	scanf("%d",&T);
	for(int i=0;i<T;i++){
	    int n;
	    int arr[n];
	    for(int j=0;j<n;j++){
	        scanf("%d",&arr[j]);
	    }
	    int max=INT_MIN;
	    for(int j=0;j<n;j++){
	        for(int k=j+1;k<n;k++){
	            int sum=arr[j]+arr[k];
	            if(sum>max){
	                max=sum;
	            }
	        }
	    }
	  printf("%d\n",max);  
	}
	return 0;
}
