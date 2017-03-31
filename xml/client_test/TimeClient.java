import java.rmi.*;
import javax.xml.rpc.*;
import localhost.axis.services.TimeService.*;

public class TimeClient {
  public static void main(String[] args) throws RemoteException, 
                                                ServiceException {
    // 呼叫服務的方式，一般分為兩個步驟。首先，先初始化一個 Service Locator
    // 物件，再由這個物件的 get 方法，取得代表遠端服務的 stub。
    QueryTimeService service = new QueryTimeServiceLocator();
    QueryTime call = service.getTimeService();
    
    // 由於 stub 在概念上代表遠端服務的物件，所以就可以直接
    // 使用該物件的 get 方法來執行方法 getTime()
    String result = call.getTime();

    System.out.println(result);
  }
}